## tex-tracker

Package tracker for [Total Express](http://www.totalexpress.com.br).

Rastreia pacotes da [Total Express](http://www.totalexpress.com.br).

Tracks packages sent through Total Express. Made this in a couple of hours. I am using web scraping to grab the data.

Rastreia encomendas da total express. Feito em duas horas. Usa web scrapping para pegar as informações relevantes.

I built a telegram bot to track my packages and notify me of changes in the tracking status. I added a cron job to run a slightly different version of this script every couple of hours, and when there are any changes (it checks against a JSON file with tracking data from the previous check) the bot will message me. You can change this code to fit your needs.

Usei este código junto com um bot do telegram (ou qualquer outro serviço) para receber notificações quando o status do meu pacote mudar. Para isso, basta colocar cron job em seu servidor para ficar checando as informações em um determinado intervalo de tempo (recomendo algumas vezes por dia em algum minuto aleatório para não sobrecarregar o servidor deles).

### Uso

```
$code1 = 'fG9x0C2oWDtDOs0iQwI8hNUbF%2FghmEQnaMQ63nEXk4CCFnZhz5R2r1XEPqx0eoGWvERcPl4JsiUR4H%2BcvN0OiZkbXgXgVbMFtkbLCq788YTiBcNgwXhTtzKnlxFMLreGOkfLme46KTIMkLYxgyXXae%2BLTC0%3D';

$tracker = new TEXTracker($code1);

var_dump($tracker->track());
```

O retorno será um array contendo a informação do rastreio.

```
Array
(
    [awb] => 0560554727
    [nota_fiscal] => 4957745
    [pedido] => 104176565
    [eventos] => Array
        (
            [0] => Array
                (
                    [data] => 21/03/2015
                    [hora] => 13:08:57
                    [status] => RECEBIDO NO CENTRO DE DISTRIBUIÇÃO
                )

            [1] => Array
                (
                    [data] => 23/03/2015
                    [hora] => 02:40:52
                    [status] => RECEBIDO NO CENTRO DE DISTRIBUIÇÃO
                )

            [2] => Array
                (
                    [data] => 23/03/2015
                    [hora] => 15:13:06
                    [status] => TRANSFERENCIA PARA /
                )

            [3] => Array
                (
                    [data] => 26/03/2015
                    [hora] => 08:07:00
                    [status] => RECEBIDO NO CENTRO DE DISTRIBUIÇÃO Natal/RN
                )

            [4] => Array
                (
                    [data] => 27/03/2015
                    [hora] => 09:32:38
                    [status] => SEPARADO PARA O ROTEIRO DE ENTREGA
                )

            [5] => Array
                (
                    [data] => 27/03/2015
                    [hora] => 09:35:01
                    [status] => PROCESSO DE ENTREGA
                )

            [6] => Array
                (
                    [data] => 28/03/2015
                    [hora] => 16:00:00
                    [status] => ENTREGA REALIZADA
                )

        )

)
```

Para conseguir o código do pacote siga os seguintes passos:
1. Acesse http://tracking.totalexpress.com.br/tracking/0
1. Preencha o form com os seus dados
1. Clique no pacote que deseja rastrear
1. Na url da página de rastreio, basta copiar o conteudo após "?code="


### The MIT License (MIT)

Copyright (c) 2016 Ivanilson Melo

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
