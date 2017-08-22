# Project Title

This project is a simple Chain of Custody using Block Chain. This project was developed during TP Hackaton.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development purposes.

### Prerequisites

What things you need to install the software and how to install them

```
PHP7.0 installed
NodeJS installed
Composer installed
NaiveChain installed
```

### Installing

Install the depedencies for Laravel

```
composer update
```

And create the local server

```
Local Development Server

If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:

php artisan serve
```
On the your NaiveChain folder, launch the naivechain server

```
npm install
HTTP_PORT=3001 P2P_PORT=6001 npm start
HTTP_PORT=3002 P2P_PORT=6002 PEERS=ws://localhost:6001 npm start
curl -H "Content-type:application/json" --data '{"data" : "Some data to the first block"}' http://localhost:3001/mineBlock
```

End with an example of getting some data out of the system or using it for a little demo


## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Laravel](https://github.com/laravel/laravel) - A PHP Framework For Web Artisans
* [NaiveChain](https://github.com/lhartikk/naivechain) - A blockchain implementation in 200 lines of code

## Authors

* **Jefferson Bonnaire** - *Initial work* - [JeffersonBe](https://github.com/jeffersonbe)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone who's code was used (especially the NaiveBlock 🙌🏾)
