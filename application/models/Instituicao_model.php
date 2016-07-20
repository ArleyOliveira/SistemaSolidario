<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Instituicao_model extends CI_Model
{

    public function do_insert($dados = NULL, $emailResponsavel = NULL)
    {
        if ($dados != NULL):
            $this->db->insert('instituicoes', $dados);
            $responsavelInstituicao['instituicao_id'] = $this->db->insert_id();
            $responsavelInstituicao['doador_email'] = $emailResponsavel; 
            $this->db->insert('responsavel_instituicao', $responsavelInstituicao);
            $this->session->set_flashdata('cadastrook', 'Cadastro efetuado com sucesso!');
            redirect('/index.php/instituicao/cadastrar');
        endif;
    }
    
    public function do_insert_necessidades($dados = NULL)
    {

        if ($dados != NULL):
            $this->db->insert('necessidades', $dados);
            $this->session->set_flashdata('cadastrook', 'Necessidade cadastrada com sucesso!');
            redirect('/index.php/instituicao/necessidades');
        endif;
    }

    public function get_all()
    {
        return $this->db->get('instituicoes');
    }

    public function do_update($dados = NULL, $condicao = NULL)
    {
        if ($dados != NULL):
            $this->db->update('instituicoes', $dados, $condicao);
            $this->session->set_flashdata('cadastrook', 'Instituição Ativa!');
            redirect('/instituicao/consultar');
        endif;
    }

    public function get_instituicoes_by_id($idinstituicao)
    {
        //Busca com condição
        $query = $this->db->get_where('instituicoes', array('id' => $idinstituicao));

        //row_object() retorna direto o objeto produto e não um array
        return $query->row_object();
    }

    /*
      public function do_delete($condicao = NULL) {

      if ($condicao != NULL):
      $this->db->delete('usuario', $condicao);
      $this->session->set_flashdata('excluirok', IconsUtil::getIcone(IconsUtil::ICON_OK). ' Registro deletado com sucesso!');
      endif;
      }

      public function get_all() {
      return $this->db->get('usuario');
      }


      public function get_byEmailAt($email = NULL, $tabela = NULL) {
      if ($email != NULL && $tabela != NULL):
      $this->db->where('email', $email);
      $this->db->limit(1);
      return $this->db->get($tabela);
      else:
      return false;

      endif;
      }

      public function do_update($dados = NULL, $condicao = NULL) {
      if ($dados != NULL && $condicao != NULL):
      $this->db->update('usuario', $dados, $condicao);
      $this->session->nome = $dados['nome'];
      $this->session->set_flashdata('edicaook', IconsUtil::getIcone(IconsUtil::ICON_OK).' Dados alterado com sucesso!');
      redirect('usuario/update/');
      endif;
      } */
}
