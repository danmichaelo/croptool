VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "ubuntu/trusty64"
  config.vm.network "private_network", type: "dhcp"

  config.vm.provision :shell, :path => "provision/setup.sh"
end
