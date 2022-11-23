function trocarInputs(numeroTela){
    inputs = document.querySelectorAll('.input')
    verificador1 = false

    switch(numeroTela){
        case 1: 

            if(!(inputs[0].value) && !(inputs[1].value) && !(inputs[2].value) && !(inputs[3].value) && inputs[2].value != inputs[3].value){
                msgErro = "Preencha todos os campos";
                if(!(inputs[0].value)){
                    document.querySelector('.texto1').innerHTML = msgErro
                    break
                }
                else{
                    document.querySelector('.texto1').innerHTML = ''
                }
                if(!(inputs[1].value)){
                    document.querySelector('.texto2').innerHTML = msgErro
                    break
                }   
                else{
                    document.querySelector('.texto2').innerHTML = ''
                }
                
                if(!(inputs[2].value) && !(inputs[3].value) && inputs[2].value != inputs[3].value){
                    if(!(inputs[2].value)){
                        document.querySelector('.senha-error').innerHTML = msgErro
                        break
                    }   
                    else{
                        document.querySelector('.senha-error').innerHTML = ''
                    }
                    if(!(inputs[3].value)){
                        document.querySelector('.senha-error2').innerHTML = msgErro
                        break
                    }   
                    else{
                        document.querySelector('.senha-error2').innerHTML = ''
                    }
                    if(inputs[2].value != inputs[3].value){
                        document.querySelector('.senha-error').innerHTML = "As senhas são diferentes"
                        document.querySelector('.senha-error2').innerHTML = "As senhas são diferentes"
                        break
                    }
                    else{
                        document.querySelector('.senha-error').innerHTML = ""
                        document.querySelector('.senha-error2').innerHTML = ""
                        break
                    }
                }   
                
            }
            else{
                img = document.querySelector('.ondinha1')
                img.src = './src/imgs/voltar.png'
                img.setAttribute('onclick', 'trocarInputs(2);');
                document.querySelector('.avancar').src = './src/imgs/finalizar.png';
                document.querySelector('.cadastro--submit').setAttribute('for','finalizar');

                //img.classList = "teste"
                blocos = document.querySelectorAll('.cadastro--input')
                for(i=0;i<4;i++){
                    blocos[i].style.display='none'                            
                }
                document.querySelector('.cadastro--input__ativada').style.display = "flex"
                document.querySelector('.ondinha1').classList.toggle('voltar');

                break
            }

        case 2: 
            img = document.querySelector('.ondinha1');
            img.src = './src/imgs/img-cad1.png';
            img.setAttribute('onclick', '');
            img.classList.toggle('voltar');
            document.querySelector('.avancar').src = './src/imgs/seta.png'
            document.querySelector('.cadastro--submit').setAttribute('for','');
       
            //img.classList = "teste"
            blocos = document.querySelectorAll('.cadastro--input');
            for(i=0;i<4;i++){
                blocos[i].style.display='flex';
            }
            document.querySelector('.cadastro--input__ativada').style.display = "none";
    


        break
    }
}