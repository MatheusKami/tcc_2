<div class = "logo">
    <a href="/"><p>logo</p></a>
</div>
@extends('mylayouts/base')
@section('title', 'Inicio')
@section('content')

<div class = 'topico1'>
    <div class = "objt1">
        <h1>Encontre <br> seu curso<br> ideal</h1>
        <h5>online ou presencial</h5>
        <a href="#" class = "b_botao">Encontrar</a>
    </div>
    <div class = "objt2">
        <img src="images/prof.png" alt="foto">
    </div>
</div>

<div class ="degrade_down">

</div>

<div data-aos="fade-right" data-aos-duration="2500" class = "topico2">
    <h1>Aprenda <br> de onde <br> estiver</h1>
    <br>
    <div data-aos="fade-left" data-aos-duration="2500" class = "objt1">
        <div class = "bloco" >
            <h1>1.Procure</h1>
            <p>procure pelos perfis, <br> profissionais ou instituições <br> que mais te agradarem</p>
        </div>
        
        <div class = "quadro"><h1>1</h1></div>
    </div>
    <br>
    <div data-aos="fade-right" data-aos-duration="2500" class = "objt2">
         <div class = "bloco">
            <h1>2.Contato</h1>
            <p>Entre em contato com o profissional <br> para combinar a melhor <br> forma de ensino</p>
        </div>

        <div class = "quadro2"><h1>2</h1></div>
    </div>
    <br>
    <div data-aos="fade-left" data-aos-duration="2500" class = "objt3">
        <div class = "bloco">
            <h1>3.Agende</h1>
            <p>Agende um horario que <br> melhor se encaixa com você</p>
        </div>
        <div class = "quadro"><h1>3</h1></div>
    </div>
    <br>
   
    <div class = "topico3" data-aos="fade-up" data-aos-duration="2500">
        <h1>Torne-se também <br> um professor</h1>
        <p>Compartilhe sua paixão</p>
        <a href="" class = "b_botao">Saiba Mais</a>
    </div>
</div>
<div class = "degrade_up">

</div>
<div class ="rodape">
    <div class = "suporte">
        <h3>Suporte</h3>
        <a href="#">Telefones</a>
        <a href="#">E-mails</a>
        <a href="#">Comunidade</a>
        <a href="#">Avalie</a>
    </div>
    <div class = "quem_somos">
        <h3>Quem somos</h3>
    </div>

</div>
<div class = "rodape2">
    <p>&copy 2023 nome todos os direitos reservados</p>
    <p>Paam</p>
</div>

@endsection