<p align="center"><a href="https://www.meetup.com/pt-BR/meetups-leverage-your-achievements/" target="_blank"><img src="https://secure-content.meetupstatic.com/images/https%3A%2F%2Fsecure.meetupstatic.com%2Fphotos%2Fevent%2F3%2F4%2F8%2F7%2Fhighres_497713447.jpeg/600x337.jpg"></a></p>

## Leverage Your Achievements - LGPD & Criptografia

Esse repostiório é público e foi criado para o Meetup "Leverage Your Achievements - LGPD & Criptografia", de 4/8/2021.

O conteúdo é um exemplo de implementação de criptografia AES-256 em um projeto Laravel 8.5, permitindo utilizar o ORM Eloquent para acessar / gravar informações criptografadas no banco de dados.

## Instalação e Configuração

Para instalar o repositório, certifique-se de possuir os requisitos para a instalação do Laravel (https://laravel.com/docs/8.x).

Após clonar o repositório, acesse a pasta do repositório e execute _composer install_ e também _npm install_.

O repositório utiliza dockerização com o sail - então execute _./vendor/bin/sail up -d_ para inicializar o sail em background.

Para gerar o banco de dados (migrations & seeders), execute _./vendor/bin/sail artisan migrate:fresh --seed_

Ao rodar as migrations e seeders, são gerados 10 registros de clientes no banco de dados mysql.

Após a execução do sail, o aplicativo pode ser acessado em seu navegador, no endereço _http://localhost_

A tela inicial lista todos os clientes do banco de dados e possui opção para incluir novo cliente, ordernar pelas colunas (id, name, email, cpf, nascimento), editar ou excluir linhas.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
