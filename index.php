<?php include 'header.php';?>

<main class="content_form">

    <div class="logo">
        <img src="images/logo_media.png" alt="">

        <h1>Cadastro de informações Google Meu Negócio</h1>
    </div><!--logo-->

    <div class="container inputs">
        
        <form action="">
            <div class="display">

                <div class="margin" style="width:48%;">
                    <label for="">*Nome da empresa</label>
                    <input type="text" name="nome" required="">
                </div><!--margin-->

                <div class="margin" style="width:48%;">
                    <label for="">*Endereço completo</label>
                    <input type="text" name="endereco" placeholder="Rua / Número / Bairro / Cidade / Estado" required="">
                </div><!--margin-->

                <div class="margin" style="width:48%;">
                    <div class="duvida">
                        <div class="icone"><img src="images/ico_interrogation.png" alt=""></div>

                        <div class="tooltip">
                            Qual cidade e/ou estado sua empresa presta serviços ou realiza entregas?
                        </div><!--tooltip-->
                    </div><!--duvida-->

                    <label for="">*Área de cobertura</label>
                    <input type="text" name="area_cobertura" required="">
                </div><!--margin-->

                <div class="margin" style="width:48%;">
                    <label for="">*E-mail para contato</label>
                    <input type="email" name="email" required="">
                </div><!--margin-->

                <div class="margin" style="width:48%;">
                    <label for="">*Horário de funcionamento</label>
                    
                    <div class="drop_button">
                        <span></span>

                        <div class="box_horario">
                            <div class="item">
                                <label for="">Segunda à Sexta-Feira</label>    

                                <div>
                                    <span>Manhã</span>
                                    <input type="time" id="appt" name="appt">
                                    <input type="time" id="appt" name="appt">
                                </div>

                                <div>
                                    <span>Tarde</span>
                                    <input type="time" id="appt" name="appt">
                                    <input type="time" id="appt" name="appt">
                                </div>

                                <div>
                                    <span>Noite</span>
                                    <input type="time" id="appt" name="appt">
                                    <input type="time" id="appt" name="appt">
                                </div>
                            </div><!--item-->

                            <div class="item">
                                <label for="">Sábado</label>    

                                <div>
                                    <span>Manhã</span>
                                    <input type="time" id="appt" name="appt">
                                    <input type="time" id="appt" name="appt">
                                </div>

                                <div>
                                    <span>Tarde</span>
                                    <input type="time" id="appt" name="appt">
                                    <input type="time" id="appt" name="appt">
                                </div>

                                <div>
                                    <span>Noite</span>
                                    <input type="time" id="appt" name="appt">
                                    <input type="time" id="appt" name="appt">
                                </div>
                            </div><!--item-->

                            <div class="item">
                                <label for="">Domingo</label>    

                                <div>
                                    <span>Manhã</span>
                                    <input type="time" id="appt" name="appt">
                                    <input type="time" id="appt" name="appt">
                                </div>

                                <div>
                                    <span>Tarde</span>
                                    <input type="time" id="appt" name="appt">
                                    <input type="time" id="appt" name="appt">
                                </div>

                                <div>
                                    <span>Noite</span>
                                    <input type="time" id="appt" name="appt">
                                    <input type="time" id="appt" name="appt">
                                </div>
                            </div><!--item-->

                            <div>
                                <label for="">Observação</label>
                                <input type="text" name="observacao" required="" style="width:100%;">

                            </div>
                        </div><!--box_horario-->
                    </div><!--drop-->
                </div><!--margin-->

                <div class="margin" style="width:48%;">
                    <label for="">Link site</label>
                    <input type="url" name="url_site" required="">
                </div><!--margin-->

                <div class="margin" style="width:48%; justify-content: space-between;">
                    <div class="margin" style="width:48%;">
                        <label for="">*Telefone principal</label>
                        <input type="tel" name="telefone_principal" required="">
                    </div><!--margin-->

                    <div class="margin" style="width:48%;">
                        <label for="">Telefone secundário</label>
                        <input type="tel" name="telefone_secundario" required="">
                    </div><!--margin-->
                </div><!--margin-->

                <div class="margin" style="width:48%;">
                    <label for="">Link de agendamento</label>
                    <div class="duvida">
                        <div class="icone"><img src="images/ico_interrogation.png" alt=""></div>

                        <div class="tooltip">
                            Link utilizado para reservas. Whatsapp ou algum site de reservas
                        </div><!--tooltip-->
                    </div><!--duvida-->

                    <input type="text" name="link_agendamento" required="">
                </div><!--margin-->

                <div class="margin" style="width:48%;">
                    <label for="">*Quais serviços presta e suas subcategorias</label>
                    <input type="text" name="nome" required="">
                </div><!--margin-->

                <div class="display gap_small" style="width:100%;">
                   <h2>Atributos:</h2>

                   <div class="checkbox">
                        <input type="checkbox" name="wifi" id="wifi">    
                        <label for="wifi">Wi-fi</label>
                    </div> 

                    <div class="checkbox">
                        <input type="checkbox" name="agendamento" id="agendamento">
                        <label for="agendamento">É necessário agendamento</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="mascara" id="mascara">
                        <label for="mascara">Máscara é obrigatório</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="equipe_mascara" id="equipe_mascara">
                        <label for="equipe_mascara">A equipe usa mascaras</label>
                    </div>
                </div><!--display-->

                

                <div class="display gap_small" style="width:100%;">
                   <h2>Sobre Acessibilidade:</h2> 

                    <div class="checkbox">
                        <input type="checkbox" name="entrada" id="entrada">
                        <label for="entrada">Entrada</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="elevador" id="elevador">
                        <label for="elevador">Elevador</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="assentos_adaptados" id="assentos_adaptados">
                        <label for="assentos_adaptados">Possui assentos adaptados</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="estacionamento_acessivel" id="estacionamento_acessivel">
                        <label for="estacionamento_acessivel">Estacionamento</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="banheiro_acessivel" id="banheiro_acessivel">
                        <label for="banheiro_acessivel">Banheiro</label>
                    </div>
                </div><!--display-->

                

                <div class="display gap_small" style="width:100%;">
                   <h2>Métodos de pagamento:</h2>

                   <div class="checkbox">
                        <input type="checkbox" name="cartao" class="click_cartao" id="cartao">    
                        <label for="cartao">Cartão de crédito</label>
                    </div> 

                    <div class="checkbox">
                        <input type="checkbox" name="cheques" id="cheques">
                        <label for="cheques">Cheques</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="dinheiro" id="dinheiro">
                        <label for="dinheiro">Dinheiro</label>
                    </div>
                </div><!--display-->

                

                <div class="display gap_small" style="width:100%;">
                   <h2>Opções de serviços:</h2>

                   <div class="checkbox">
                    <input type="checkbox" name="compras_na_loja" id="compras_na_loja">    
                        <label for="compras_na_loja">Compras na loja</label>
                    </div> 

                    <div class="checkbox">
                        <input type="checkbox" name="realiza_entrega" id="realiza_entrega">
                        <label for="realiza_entrega">Realizam Entrega</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="possivel_retirada" id="possivel_retirada">
                        <label for="possivel_retirada">É possível retirada na loja</label>
                    </div>

                </div><!--display-->

                

                <div class="margin" style="width:100%;">
                    <label for="">Descrição da empresa</label>
                    <textarea style="height:100px;" placeholder="O que sua empresa faz? Qual problema ela resolve? Qual solução oferece?" required=""></textarea>
                </div><!--margin-->
        </form>

    </div><!--container-->
</main><!--content_form-->

<?php include 'footer.php';?>