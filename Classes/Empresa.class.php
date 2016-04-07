<?php

include_once './Generic.class.php';

class Empresa extends Generic {

    protected $nomeFantasia;
    protected $razaoSocial;
    protected $cnpj;
    protected $telefone;
    protected $atividadePrincipal;
    protected $site;
    protected $nomeContato;
    protected $telefoneContato;

    function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    function getRazaoSocial() {
        return $this->razaoSocial;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getAtividadePrincipal() {
        return $this->atividadePrincipal;
    }

    function getSite() {
        return $this->site;
    }

    function getNomeContato() {
        return $this->nomeContato;
    }

    function getTelefoneContato() {
        return $this->telefoneContato;
    }

    function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
    }

    function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setAtividadePrincipal($atividadePrincipal) {
        $this->atividadePrincipal = $atividadePrincipal;
    }

    function setSite($site) {
        $this->site = $site;
    }

    function setNomeContato($nomeContato) {
        $this->nomeContato = $nomeContato;
    }

    function setTelefoneContato($telefoneContato) {
        $this->telefoneContato = $telefoneContato;
    }

    public function Cadastra() {
        $this->con = new Conexao();
        $this->con->Conecta();
        $sql = 'INSERT INTO empresa(nome_fantasia, razao_social, cnpj, telefone, atividade_principal, site, nome_contato, telefone_contato) VALUES ("' . $this->nomeFantasia . '", "' . $this->razaoSocial . '", "' . $this->cnpj . '" ,"' . $this->telefone . '" , "' . $this->atividadePrincipal . '", "' . $this->site . '" ,"' . $this->nomeContato . '" ,"' . $this->telefoneContato . '")';
        $this->con->Executa($sql);
        $this->con->Desconecta();
    }

    public function Deleta($id) {
        $this->con = new Conexao();
        $this->con->Conecta();
        $sql = 'DELETE FROM empresa WHERE id = ' . $id;
        $this->con->Executa();
        $this->con->Desconecta();
    }

    public function Atualiza() {
        $this->con = new Conexao();
        $this->con->Conecta();
        $sql = 'UPDATE empresa SET nome_fantasia = "' . $this->nomeFantasia . '", razao_social= "' . $this->razaoSocial . '", cnpj = "' . $this->cnpj . '", telefone = "' . $this->telefone . '", atividade_principal = "' . $this->atividadePrincipal . '", site = "' . $this->site . '", nome_contato = "' . $this->nomeContato . '", telefone_contato = "' . $this->telefoneContato . '" WHERE ' . $this->id;
        $this->con->Executa();
        $this->con->Desconecta();
    }

}
