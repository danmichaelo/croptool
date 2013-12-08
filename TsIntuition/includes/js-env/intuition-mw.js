(function (mw, $) {
	var intuition,
		apiPath = 'api.php',
		mwMsgPrefix = 'intuition-',
		loaded = {},
		hasOwn = loaded.hasOwnProperty,
		slice = [].slice;


	intuition = {

		/**
		 * @param {string|Array} domains
		 * @param {string} [lang=wgUserLanguage]
		 * @return {jQuery.Promise}
		 */
		load: function (domains, lang) {
			var i, len, d,
				queue = [];

			domains = typeof domains === 'string' ? [domains] : domains;

			for (i = 0, len = domains.length; i < len; i++) {
				if (!hasOwn.call(loaded, domains[i])) {
					queue.push(domains[i]);
				}
			}

			d = jQuery.Deferred();

			if (!queue.length) {
				setTimeout(d.resolve);
				return d.promise();
			}

			$.ajax({
				url: apiPath,
				data: {
					domains: queue.join('|'),
					userlang: lang || mw.config.get('wgUserLanguage')
				},
				dataType: 'jsonp'
			}).done(function (data) {
				if (!data || !data.messages) {
					d.reject(data);
					return;
				}

				$.each(data.messages, intuition.put);

				d.resolve(data.messages);
			}).fail(d.reject);

			return d.promise();
		},

		put: function (domain, msgs) {
			loaded[domain] = true;
			// Message store might return false instead of an object if the domain was not
			// found on the intuition server
			if (msgs) {
				$.each(msgs, function (key, val) {
					mw.messages.set(mwMsgPrefix + domain + '-' + key, val);
				});
			}
		},

		/**
		 * @param {string} domain
		 * @param {string} key
		 * @param {Mixed...} [parameters]
		 * @return {string}
		 */
		msg: function (domain, key) {
			var args = slice.call(arguments, 2);
			args.unshift(mwMsgPrefix + domain + '-' + key);
			return mw.message.apply(mw.message, args).toString();
		},

		/**
		 * @param {string} domain
		 * @param {string} key
		 * @param {Mixed...} [parameters]
		 * @return {mw.Message}
		 */
		message: function (domain, key) {
			var args = slice.call(arguments, 2);
			args.unshift(mwMsgPrefix + domain + '-' + key);
			return mw.message.apply(mw.message, args);
		}
	};

	// Expose
	mw.libs.intuition = intuition;

}(mediaWiki, jQuery));
