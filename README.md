geobeni
=======

Documentation used:

* https://gist.github.com/matjack1/6d74c757a2e49739a06a

* https://gist.github.com/matjack1/0fea71081b3d3f031b47


## Install in 2019

Install Ruby 2.0.0 (with [rbenv](https://github.com/rbenv/rbenv))

```
rbenv install 2.0.0-p247
```

Install compass and link to default folder, for Sass compilation

```
gem install compass -v 0.12.4
sudo mkdir -p /opt/wordmove
sudo chown $USER:$GROUP /opt/wordmove
ln -s /home/matteo/.rbenv/shims/compass /opt/wordmove/compass
```

For Coffeescript compilation

```
ln -s /home/matteo/.rbenv/shims/ruby /opt/wordless/ruby
gem install thor coffee-script therubyracer yui-compressor
gem install sprockets -v 3.2.0
```