<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
   <div class="container">
       <nav>
       <ul class="menu">
       <a href="index.php"><li>Cadastro</li></a>
       <a href=""consultas.php><li>Consultas</li>
       </ul>
       </nav>
      <section>
          <h1>Cadastro de Empresas</h1>
          <hr><br><br>
          <form method="post" action="processa.php">
          <input type="submit" value="Salvar" class="btn">
          <input type="reset" value ="Limpar" class= "btn">
          <br><br>

          Nome<br>
          <input type="text" name="nome" class="campo" maxlength="40" autofocus><br>
          Nome da sua empresa<br>
          <input type="text" name="nomeempresa" class="campo" maxlength="40" required><br>
          Descrição<br>
          <input type="text" name="descricao" class="campo" maxlength="300" required autofocus><br>
          Telefone comercialo<br>
          <input type="text" name="telefone" class="campo" maxlength=15 required autofocus><br>
          Bairro da empresa<br>
          <input type="text" name="bairro" class="campo" maxlength="40" required ><br>
          <select id="locais name="locais" size="3">
                <option selected="" value="">Locais de atendimento</option>
                <option value="Acupe">Acupe</option>
                <option value="Aeroporto">Aeroporto</option>
                <option value="Águas Claras">Águas Claras</option>
                <option value="Alto da Terezinha">Alto da Terezinha</option>
                <option value="Alto das Pombas">Alto das Pombas</option>
                <option value="Alto do Cabrito">Alto do Cabrito</option>
                <option value="Alto do Coqueirinho">Alto do Coqueirinho</option>
                <option value="Amaralina">Amaralina</option>
                <option value="Areia Branca">Areia Branca</option>
                <option value="Arenoso">Arenoso</option>
                <option value="Arraial do Retiro">Arraial do Retiro</option>
                <option value="Bairro da Paz">Bairro da Paz</option>
                <option value="Baixa de Quintas">Baixa de Quintas</option>
                <option value="Barbalho">Barbalho</option>
                <option value="Barra">Barra</option>
                <option value="Barreiras">Barreiras</option>
                <option value="Barris">Barris</option>
                <option value="Beiru/Tancredo Neves">Beiru/Tancredo Neves</option>
                <option value="Boa Viagem">Boa Viagem</option>
                <option value="Boa Vista de Brotas">Boa Vista de Brotas</option>
                <option value="Boa Vista de São Caetano">Boa Vista de São Caetano</option>
                <option value="Boca da Mata">Boca da Mata</option>
                <option value="Boca do Rio">Boca do Rio</option>
                <option value="Bom Juá">Bom Juá</option>
                <option value="Bonfim">Bonfim</option>
                <option value="Brotas">Brotas</option>
                <option value="Cabula">Cabula</option>
                <option value="Cabula VI">Cabula VI</option>
                <option value="Caixa D’Água">Caixa D’Água</option>
                <option value="Cajazeiras II">Cajazeiras II</option>
                <option value="Cajazeiras III">Cajazeiras III</option>
                <option value="Cajazeiras IV">Cajazeiras IV</option>
                <option value="Cajazeiras V">Cajazeiras V</option>
                <option value="Cajazeiras X">Cajazeiras X</option>
                <option value="Cajazeiras XI">Cajazeiras XI</option>
                <option value="Calabar">Calabar</option>
                <option value="Calabetão">Calabetão</option>
                <option value="Calçada">Calçada</option>
                <option value="Caminho das Árvores">Caminho das Árvores</option>
                <option value="Caminho de Areia">Caminho de Areia</option>
                <option value="Campinas de Pirajá">Campinas de Pirajá</option>
                <option value="Canabrava">Canabrava</option>
                <option value="Candeal">Candeal</option>
                <option value="Canela">Canela</option>
                <option value="Capelinha">Capelinha</option>
                <option value="Cassange">Cassange</option>
                <option value="Castelo Branco">Castelo Branco</option>
                <option value="Centro">Centro</option>
                <option value="CAB">CAB</option>
                <option value="Centro Histórico">Centro Histórico</option>
                <option value="Chapada do Rio Vermelho">Chapada do Rio Vermelho</option>
                <option value="Cidade Nova">Cidade Nova</option>
                <option value="Comércio">Comércio</option>
                <option value="Cosme de Farias">Cosme de Farias</option>
                <option value="Costa Azul">Costa Azul</option>
                <option value="Coutos">Coutos</option>
                <option value="Curuzu">Curuzu</option>
                <option value="Dom Avelar">Dom Avelar</option>
                <option value="Doron">Doron</option>
                <option value="Eng. Velho da Federação">Eng. Velho da Federação</option>
                <option value="Engenho Velho de Brotas">Engenho Velho de Brotas</option>
                <option value="Engomadeira">Engomadeira</option>
                <option value="Fazenda Coutos">Fazenda Coutos</option>
                <option value="Fazenda Grande do Retiro">Fazenda Grande do Retiro</option>
                <option value="Fazenda Grande I">Fazenda Grande I</option>
                <option value="Fazenda Grande II">Fazenda Grande II</option>
                <option value="Fazenda Grande III">Fazenda Grande III</option>
                <option value="Fazenda Grande IV">Fazenda Grande IV</option>
                <option value="Federação">Federação</option>
                <option value="Garcia">Garcia</option>
                <option value="Graça">Graça	</option>
                <option value="Granjas Rurais P. Vargas">Granjas Rurais P. Vargas</option>
                <option value="IAPI">IAPI</option>
                <option value="Ilha de Bom Jesus dos Passos">Ilha de Bom Jesus dos Passos</option>
                <option value="Ilha de Maré">Ilha de Maré</option>
                <option value="Ilha dos Frades">Ilha dos Frades</option>
                <option value="Imbuí">Imbuí</option>
                <option value="Itacaranha">Itacaranha</option>
                <option value="Itapuã">Itapuã</option>
                <option value="Itinga">Itinga</option>
                <option value="Jaguaripe I">Jaguaripe I</option>
                <option value="Jardim Armação">Jardim Armação</option>
                <option value="Jardim Cajazeiras">Jardim Cajazeiras</option>
                <option value="Jardim das Margaridas">Jardim das Margaridas</option>
                <option value="Jardim Nova Esperança">Jardim Nova Esperança</option>
                <option value="Jardim Santo Inácio">Jardim Santo Inácio</option>
                <option value="Lapinha">Lapinha</option>
                <option value="Liberdade">Liberdade</option>
                <option value="Lobato">Lobato</option>
                <option value="Luiz Anselmo">Luiz Anselmo</option>
                <option value="Macaúbas">Macaúbas</option>
                <option value="Mangueira">Mangueira</option>
                <option value="Marechal Rondon">Marechal Rondon</option>
                <option value="Mares">Mares</option>
                <option value="Massaranduba">Massaranduba</option>
                <option value="Mata Escura">Mata Escura</option>
                <option value="Matatu">Matatu</option>
                <option value="Monte Serrat">Monte Serrat</option>
                <option value="Moradas da Lagoa">Moradas da Lagoa</option>
                <option value="Mussurunga">Mussurunga</option>
                <option value="Narandiba">Narandiba</option>
                <option value="Nazaré">Nazaré</option>
                <option value="Nordeste de Amaralina">Nordeste de Amaralina</option>
                <option value="Nova Brasília">Nova Brasília</option>
                <option value="Nova Constituinte">Nova Constituinte</option>
                <option value="Nova Esperança">Nova Esperança</option>
                <option value="Nova Sussuarana">Nova Sussuarana</option>
                <option value="Novo Horizonte">Novo Horizonte</option>
                <option value="Novo Marotinho">Novo Marotinho</option>
                <option value="Ondina">Ondina</option>
                <option value="Palestina">Palestina</option>
                <option value="Paripe">Paripe</option>
                <option value="Patamares">Patamares</option>
                <option value="Pau da Lima">Pau da Lima</option>
                <option value="Pau Miúdo">Pau Miúdo</option>
                <option value="Periperi">Periperi</option>
                <option value="Pernambués">Pernambués</option>
                <option value="Pero Vaz">Pero Vaz</option>
                <option value="Piatã">Piatã</option>
                <option value="Pirajá">Pirajá</option>
                <option value="Pituaçu">Pituaçu</option>
                <option value="Pituba">Pituba</option>
                <option value="Plataforma">Plataforma</option>
                <option value="Porto Seco Pirajá">Porto Seco Pirajá	</option>
                <option value="Praia Grande">Praia Grande</option>
                <option value="Resgate">Resgate</option>
                <option value="Retiro">Retiro</option>
                <option value="Ribeira">Ribeira</option>
                <option value="Rio Sena">Rio Sena</option>
                <option value="Rio Vermelho">Rio Vermelho</option>
                <option value="Roma">Roma</option>
                <option value="Saboeiro">Saboeiro</option>
                <option value="Santa Cruz">Santa Cruz</option>
                <option value="Santa Luzia">Santa Luzia</option>
                <option value="Santa Mônica">Santa Mônica</option>
                <option value="Santo Agostinho">Santo Agostinho</option>
                <option value="Santo Antônio">Santo Antônio</option>
                <option value="São Caetano">São Caetano</option>
                <option value="São Cristóvão">São Cristóvão</option>
                <option value="São Gonçalo">São Gonçalo</option>
                <option value="São João do Cabrito">São João do Cabrito</option>
                <option value="São Marcos">São Marcos</option>
                <option value="São Rafael">São Rafael</option>
                <option value="São Tomé">São Tomé</option>
                <option value="Saramandaia">Saramandaia</option>
                <option value="Saúde">Saúde</option>
                <option value="Sete de Abril">Sete de Abril</option>
                <option value="Stella Maris">Stella Maris</option>
                <option value="STIEP">STIEP</option>
                <option value="Sussuarana">Sussuarana</option>
                <option value="Tororó">Tororó</option>
                <option value="Trobogy">Trobogy</option>
                <option value="Uruguai">Uruguai</option>
                <option value="Vale das Pedrinhas">Vale das Pedrinhas</option>
                <option value="Vale dos Lagos">Vale dos Lagos</option>
                <option value="Valéria">Valéria</option>
                <option value="Vila Canária">Vila Canária</option>
                <option value="Vila Laura">Vila Laura</option>
                <option value="Vila Ruy Barbosa/Jardim Cruzeiro">Vila Ruy Barbosa/Jardim Cruzeiro</option>
                <option value="Vitória">Vitória</option>
      
      
</select>
    </form>
     </section>
   </div>
</body>
</html>