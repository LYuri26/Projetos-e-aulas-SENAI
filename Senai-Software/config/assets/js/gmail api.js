// Autenticando com as credenciais da API do Gmail
gapi.load('client:auth2', () => {
    gapi.client.init({
        clientId: '258998056882-iqgnnsd2j54b6oc07dk2k8t6tfsrbris.apps.googleusercontent.com',
        apiKey: '',
        discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/gmail/v1/rest'],
        scope: 'https://www.googleapis.com/auth/gmail.send https://www.googleapis.com/auth/gmail.readonly'
    }).then(() => {
        return gapi.auth2.getAuthInstance().signIn();
    }).then(() => {
        console.log('Autenticado!');
    }).catch(err => {
        console.log(err);
    });
});

// Função para enviar o e-mail
function sendEmail() {
    // Recuperando o valor do formulário
    const recipient = document.getElementById('email').value;

    // Configurando a mensagem de e-mail
    const message = 'Olá, isto é um teste de e-mail utilizando a API do Gmail!';

    // Criando a mensagem
    const encodedMessage = btoa(`To: ${recipient}\r\nSubject: Teste de e-mail\r\n\r\n${message}`);

    // Enviando a mensagem
    const request = gapi.client.gmail.users.messages.send({
        userId: 'me',
        resource: {
            raw: encodedMessage
        }
    });

    // Tratando a resposta
    request.execute(resp => {
        console.log(resp);
    });
}

/*function iniciarAPI() {
    // Chama a função para inicializar a API do Gmail 
    checkAuth();
}

function checkAuth() {
    gapi.auth.authorize({
        client_id: '258998056882-iqgnnsd2j54b6oc07dk2k8t6tfsrbris.apps.googleusercontent.com',
        scope: 'https://www.googleapis.com/auth/gmail.readonly https://www.googleapis.com/auth/gmail.send',
        immediate: true
    }, handleAuthResult);
}

gapi.load('client:auth2', function () {
    gapi.client.init({
        'apiKey': '',
        'clientId': '258998056882-iqgnnsd2j54b6oc07dk2k8t6tfsrbris.apps.googleusercontent.com',
        'scope': 'https://www.googleapis.com/auth/gmail.readonly https://www.googleapis.com/auth/gmail.send',
        'discoveryDocs': ['https://www.googleapis.com/discovery/v1/apis/gmail/v1/rest']
    }).then(function () {
        // Define a função que será chamada após a autenticação do usuário  
        function enviarEmail(destinatario) {
            console.log('Destinatário:', destinatario);
            gapi.client.load('gmail', 'v1', function () {
                const mensagem = `<h1>Cadastro realizado com sucesso</h1><p>Olá, seu cadastro foi realizado com sucesso!</p>`;
                const assunto = 'Cadastro realizado com sucesso';
                console.log('Assunto:', assunto);

                const corpoMensagem = `To: ${destinatario}\r\nSubject: ${assunto}\r\n\r\n${mensagem}`;
                console.log('Corpo da mensagem:', corpoMensagem);

                const request = gapi.client.gmail.users.messages.send({
                    'userId': 'me',
                    'resource': {
                        'raw': btoa(corpoMensagem).replace(/\+/g, '-').replace(/\//g, '_').replace(/=+$/, '')
                    }
                });
                request.execute(function (response) {
                    console.log(response);
                });
            });
        }

        function handleAuthResult(authResult) {
            console.log('Auth result:', authResult);
            if (authResult && !authResult.error) {
                const destinatario = document.querySelector('#email').value;
                console.log('Destinatário:', destinatario);
                enviarEmail(destinatario);
            } else {
                gapi.auth.authorize({
                    'client_id': '258998056882-iqgnnsd2j54b6oc07dk2k8t6tfsrbris.apps.googleusercontent.com',
                    'scope': 'https://www.googleapis.com/auth/gmail.readonly https://www.googleapis.com/auth/gmail.send',
                    'immediate': false
                }, function (authResult) {
                    enviarEmail(destinatario);
                });
            }
            console.log('Auth result:', authResult);
        }

        gapi.auth.authorize({
            'client_id': '258998056882-iqgnnsd2j54b6oc07dk2k8t6tfsrbris.apps.googleusercontent.com',
            'scope': 'https://www.googleapis.com/auth/gmail.readonly https://www.googleapis.com/auth/gmail.send',
            'immediate': false
        }, function (authResult) {
            enviarEmail(destinatario);
        });
    });
});

function initGmailAPI() {
    gapi.load('client', function () {
        gapi.client.init({
            'apiKey': '',
            'clientId': '258998056882-iqgnnsd2j54b6oc07dk2k8t6tfsrbris.apps.googleusercontent.com',
            'scope': 'https://www.googleapis.com/auth/gmail.readonly https://www.googleapis.com/auth/gmail.send',
            'discoveryDocs': ['https://www.googleapis.com/discovery/v1/apis/gmail/v1/rest']
        }).then(function () {
            const destinatario = document.querySelector('#email').value;
            console.log('Destinatário:', destinatario);
            enviarEmail(destinatario);
        });
    });
}
*/