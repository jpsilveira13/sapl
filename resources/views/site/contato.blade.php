@extends('site.app')
@section('header')
    @include('site.header')
@endsection

@section('content')
    <section id="primary" class="content-full-width">
        <div class="container">
            <div class="column dt-sc-three-fourth first">
                <div class="hr-title">
                    <h3>Envie-nos uma Mensagem</h3>
                    <div class="title-sep">
                    </div>
                </div>
                <form method="post" class="dt-sc-contact-form" action="php/send.php" name="frmcontact">
                    <div class="column dt-sc-one-third first">
                        <p> <span> <input type="text" placeholder="Nome*" name="txtname" value="" required /> </span> </p>
                    </div>
                    <div class="column dt-sc-one-third">
                        <p> <span> <input type="email" placeholder="E-mail*" name="txtemail" value="" required /> </span> </p>
                    </div>
                    <div class="column dt-sc-one-third">
                        <p> <span> <input type="text" placeholder="Telefone" name="txtphone" value="" /> </span> </p>
                    </div>
                    <p> <textarea placeholder="Messagem*" name="txtmessage" required ></textarea> </p>
                    <p> <input type="submit" value="Enviar Mensagem" name="submit" /> </p>
                </form>
                <div id="ajax_contact_msg"></div>
            </div>

            <div class="column dt-sc-one-fourth">
                <div class="hr-title">
                    <h3>Informações </h3>
                    <div class="title-sep">
                    </div>
                </div>
                <p class="dt-sc-contact-detail"> Estamos localizados em <span>Cidade</span>. Envie-nos um e-mail, ligue para nós ou preencha o formulário ao lado para esclarecer qualquer dúvida.</p>
                <!-- **dt-sc-contact-info - Starts** -->
                <div class="dt-sc-contact-info">
                    <p> <i class="fa fa-location-arrow"></i> Endereço,<br/> Brasil </p>
                    <p> <i class="fa fa-phone"></i> +55 9 9999 9999 </p>
                    <p> <i class="fa fa-globe"></i> <a href="#"> prefeitura.com </a> </p>
                    <p> <i class="fa fa-envelope"></i> <a href="#"> contato@cpl.com </a> </p>
                </div> <!-- **dt-sc-contact-info - Ends** -->
            </div>

        </div>
        <div class="dt-sc-margin80"></div>


    </section>

@endsection