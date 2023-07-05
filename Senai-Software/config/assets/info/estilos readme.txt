fontes utilizadas:
consulta.css
agendar.css
cancelar.css
login.css
menu.css


fontes não utilizadas:

CSSlogin.css

body {
  /*font-family: 'Dancing Script', cursive;*/
  font-family: 'Montserrat', sans-serif;
  background-color: #e0e0e0;
}
.sair {
  display: block;
  position: fixed;
  top: 10px;
  right: 10px;
  padding: 10px;
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  border-radius: 4px;
  text-decoration: none;
  color: #333;
  font-weight: bold;
  }

#app {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  margin-top: 10%;
}

h1 {
  text-align: center;
  color: #005ca9;
  font-size: 24px;

}

form {
  margin-top: 2rem;
  align-items: center;
}

label {
  display: block;
  margin-bottom: 10px;
  color: #000000;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #005ca9;
  width: 95%;
  padding: 10px;
  border-radius: 4px;
  margin-bottom: 15px;
}

input[type="text"]:focus,
input[type="password"]:focus {
  outline: none;
  border-color: #000000;
}

input[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color: #005ca9;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #005ca9;
}

input::placeholder {
  color: #999;
}

.acessar {
  background-color: #005ca9;

}

input[type="submit"]:hover {
  background-color: #e43b3b;
}



menuAgendamento.css

body {
  background-color: #e0e0e0;
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;

}

.sair {
  display: block;
  position: fixed;
  top: 10px;
  right: 10px;
  padding: 10px;
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  border-radius: 4px;
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

#app {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  margin-top: 40vh;
}

h1 {
  color: #005ca9;
  font-size: 24px;
  text-align: center;
  font-family: 'Montserrat', sans-serif;
}

form {
  text-align: center;
  background-color: #fbfbfb;
}


label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #000000;
}

/* IMPUT */

input[type="text"] {
  width: 50%;
  padding: 10px;
  border: 1px solid #005ca9;
  border-radius: 4px;
  margin-bottom: 15px;
}

input[type="checkbox"] {
  margin-right: 5px;
}

input[type="submit"] {
  background: transparent;
  position: relative;
  padding: 5px 15px;
  width: 100%;
  display: flex;
  justify-content: center;
  /* Centralizar horizontalmente */
  align-items: center;
  font-size: 18px;
  font-weight: 600;
  text-decoration: none;
  cursor: pointer;
  border: 1px solid rgb(189, 194, 199);
  border-radius: 4px;
  outline: none;
  overflow: hidden;
  color: rgb(189, 194, 199);
  transition: color 0.3s 0.1s ease-out;
  text-align: center;
}

input:hover {
  color: #005ca9;
  border: 1px solid rgb(189, 194, 199);
}

button::before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  content: '';
  border-radius: 50%;
  display: block;
  width: 20em;
  height: 20em;
  left: -5em;
  text-align: center;
  transition: box-shadow 0.5s ease-out;
  z-index: -1;
}

button:hover {
  color: #d42a2a;
  border: 1px solid rgb(189, 194, 199);
}

button:hover::before {
  box-shadow: inset 0 0 0 10em rgb(189, 194, 199);
}