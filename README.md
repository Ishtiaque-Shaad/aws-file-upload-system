# aws-file-upload-system

This is a basic tutorial using aws/aws-sdk-php to upload a file into amazon s3 bucket<br />
<hr />

####Installation process: 

######Step 1: install composer into your device.<br />

`nano .zshrc`
if you haven't zsh intall it via [this link](https://github.com/robbyrussell/oh-my-zsh)<br />
make an alias. <br />
`alias phpmamp='/Applications/MAMP/bin/php/php5.4.10/bin/php'` <br />
&& run this code on terminal..<br />
`curl -sS https://getcomposer.org/installer | phpmamp` <br /><br />
To make composer available globally type this code on terminal <br />
`sudo mv composer.phar /usr/local/bin/composer` <br />
Now, check if it's installed `composer --version`



further documentation: [Composer install](https://getcomposer.org/doc/00-intro.md) <br />
<small>I preferred global installation like my guru Jeffery Way</small>
<br /> <br />

######Step 2: install aws-sdk-php into project folder <br />
Create a folder && inside that a `composer.json` file. <br />
write this on the file..

{
	"require":{
		"aws/aws-sdk-php":"^3.18",
		"aws/aws-php-sns-message-validator": "^1.1",
		"doctrine/cache": "^1.6",
	},
}

<br />

In terminal run this code `composer require aws/aws-sdk-php` .... The other two packages are recommended but not obligatory. <br />

After installing the environment now your free to use it... Cheers! :shipit:
