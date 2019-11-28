$ mkdir atividade-1-seu-nome
Inicie e configure o composer no seu projeto
$ composer init
Instale as dependencias do projeto
Acesse o [Packagist](https://packagist.org) e procure por GuzzleHttp e DomCrawler
$ composer require guzlehttp/guzzle
$ composer require symfony/dom-crawler
Crie a pasta "src"
$ mkdir src
Crie as pastas de classe
$ mkdir PageObject
$ mkdir Parser
$ mkdir Iterator
####PageObject
-----------------------------------------------------------------------------------------------------------------------------------------------------
Criar uma requisição utilizando o **GuzzleHttp** e retornar a [página do filme Space Jam](https://www.spacejam.com/archive/spacejam/movie/jam.htm).
####Parser
Parsear a página e extrair a URL do ["Site Map"](https://www.spacejam.com/archive/spacejam/movie/cmp/sitemap.html).
####Iterator
Criar a requisição, parsear e retonar a tabela do ["Site Map"](https://www.spacejam.com/archive/spacejam/movie/cmp/sitemap.html).
-----------------------------------------------------------------------------------------------------------------------------------------------------
### Git
Versione o projeto e coloque aqui neste projeto, desta forma sempre manteremos os códigos como referência.
-------------------------------------------------------------------------------------------------------------------------------------------------
## Documentações úteis
* [Guzzle](http://docs.guzzlephp.org/en/stable/) - Usado para fazer as requisições
* [Composer](https://getcomposer.org/doc/) - Gerenciador de depencias
* [PHP](https://www.php.net/manual/en/) - Documentação do PHP (Em inglês)
* [Guia do git](https://rogerdudler.github.io/git-guide/index.pt_BR.html) - Guia para utilização do Git
* [XPath Tutorial](https://www.w3schools.com/xml/xpath_intro.asp) - XPath Tutorial
## Autor
* **Lucas Silva**
