# Plataforma de Negociação de Mercadorias - PNM

Trata-se de uma plataforma que possibilita a inserção e listagem de mercadorias para compra e venda.

Disponível online: <http://107.170.88.181/pnm>

Foi desenvolvido com as tecnologias:

 * Back-end: PHP5
 * Banco de dados: MySQLi*
 * Front-end: JavaScript e Bootstrap
 * Serviço cloud utilizado: DigitalOcean


### Estrutura da aplicação

Foi utilizado o conceito de MVC (Model-View-Controller) para tentar deixar o código o mais portatil possível para outras aplicações (portabilidade é uma das qualidades de um software). Então, tem-se a pastar controller que faz a comunicação entra as views (insertProduct.php e listProduct.php) com a classe Product. 

A classe Product está na pasta model e é responsável por toda a comunicação com o banco de dados. 

As views estão na pasta raiz e fazem uso do framework Bootstrap para permitir a responsividade da aplicação. Como foi feito uso de um tema disponível na web foi linkado a um site do tema. 


### Referências utilizadas

Como não tinha feito projetos com PHP e Bootstrap fiz uso de bastante tutoriais para aprender e desenvolver da maneira correta. Segue lista com os tutorias e referências utilizads:

* Manual mysqli: <http://php.net/manual/en/book.mysqli.php>
* Conceito de MVC e sua funcionalidade usando o PHP: <http://www.devmedia.com.br/conceito-de-mvc-e-sua-funcionalidade-usando-o-php/22324>
* JavaScript Forms: <http://www.w3schools.com/js/js_validation.asp>
* Entendendo o padrão MVC na prática: <http://tableless.com.br/entendendo-o-padrao-mvc-na-pratica/>
* Bootstrap 3 Tutorial: <http://www.w3schools.com/bootstrap/default.asp>
