geobeni
=======

Documentation used:

* https://gist.github.com/matjack1/6d74c757a2e49739a06a

* https://gist.github.com/matjack1/0fea71081b3d3f031b47


## Install in 2019

Copy the content of `vvv-custom.yml` in your VVV configuration.

Reload your VVV instance and provision the new site by doing

```
vagrant reload --provision
```

Inside VVV (run `vagrant ssh` from the VVV folder to get inside)

Install Ruby 2.0.0 (with [rbenv](https://github.com/rbenv/rbenv))

```
rbenv install 2.0.0
```

Install compass and link to default folder, for Sass compilation

```
gem install compass -v 0.12.4
sudo mkdir -p /opt/wordmove
sudo chown $USER:$GROUP /opt/wordmove
ln -s $USER/.rbenv/shims/compass /opt/wordmove/compass
```

For Coffeescript compilation

```
ln -s $USER/.rbenv/shims/ruby /opt/wordless/ruby
gem install thor coffee-script therubyracer yui-compressor
gem install sprockets -v 3.2.0
```