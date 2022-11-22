function trocarInputs(numeroTela){
    inputs = document.querySelectorAll('.input')
    verificador1 = false
    verificador2 = true

    switch(numeroTela){
        case 1: 
                    if(!(inputs[0].value) || !(inputs[1].value)){
                        msgErro = "Preencha todos os campos";
                        if(!(inputs[0].value)){
                            document.querySelector('.texto1').innerHTML = msgErro
                        }
                        else{
                            document.querySelector('.texto1').innerHTML = ''
                        }
                        if(!(inputs[0].value)){
                            document.querySelector('.texto2').innerHTML = msgErro
                        }   
                        else{
                            document.querySelector('.texto1').innerHTML = ''
                        }
                    }
                    else{
                        verificador1 = true
                    }
                    if(inputs[2].value){
                        cpf = inputs[2].value
                        regxNumero = /[0-9]/gi
                        for(i=0;i<cpf.length;i++){
                            if(cpf[i].search(regxNumero)){
                                document.querySelector('.cpf-error').innerHTML = 'Insira apenas numeros'
                                verificador2 = false
                                break
                            }
                            else{
                                document.querySelector('.cpf-error').innerHTML = ''
                            }
                            }
                        }

                    
                    if(verificador1 && verificador2){
                        blocos = document.querySelectorAll('.cadastro--input')
                        for(i=0;i<3;i++){
                            blocos[1].style.display='none'                            
                        }
                    }
        break
    }
}