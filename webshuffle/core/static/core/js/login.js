// vue.js
const app = new Vue({
	// contenedor del componente
    el: '#login-form',
    // datos a usar dentro del componente
    data: {
        email: '',
        pass: '',
        remember: false,
        classemail: '' ,
        error: true,
        err_men:'',
    },
    // metodos vue para el componente
    methods : {
    	// funcion para validar email
    	emailvalido (email) {
    		if (email != '') {
    			//verifica si el texto ingresado es un email
    			emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
			    if (emailRegex.test(email)) {
    				//si el campo contiene un email
			   		this.classemail = '';
            this.error=false;
			  	} else {
			  		// si el campo no contiene un email
			   		this.classemail = 'in-error';
            this.error=true;
			  	}
			} else {
				this.classemail = '';
        this.error=true;
    		}
    	},

    	//funcion para validar contraseña
    	iniciar (email,pass) {
    		if (this.error==true || pass=='' || email=='') {
    		  if (email=='') {
            this.err_men='Debe ingresar el email para continuar';
          } else if (this.error==true) {
            this.err_men='El email es invalido';
          } else if (pass==''){
            this.err_men='Debe ingresar la contraseña para continuar';
          }
          $('#errmodal').modal('show')
    		} else {
    			this.err_men='Todo bien';
          $('#errmodal').modal('show')
    		}
    	}
    }
});
