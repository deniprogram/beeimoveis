<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPessoa
 *
 * @ORM\Table(name="tb_pessoa")
 * @ORM\Entity
 */
class TbPessoa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pessoa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPessoa;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_ativo", type="integer", nullable=false)
     */
    private $stAtivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_atualizacao", type="datetime", nullable=true)
     */
    private $dtAtualizacao;



    /**
     * Get idPessoa
     *
     * @return integer 
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * Set stAtivo
     *
     * @param integer $stAtivo
     * @return TbPessoa
     */
    public function setStAtivo($stAtivo)
    {
        $this->stAtivo = $stAtivo;

        return $this;
    }

    /**
     * Get stAtivo
     *
     * @return integer 
     */
    public function getStAtivo()
    {
        return $this->stAtivo;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return TbPessoa
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;

        return $this;
    }

    /**
     * Get dtCadastro
     *
     * @return \DateTime 
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * Set dtAtualizacao
     *
     * @param \DateTime $dtAtualizacao
     * @return TbPessoa
     */
    public function setDtAtualizacao($dtAtualizacao)
    {
        $this->dtAtualizacao = $dtAtualizacao;

        return $this;
    }

    /**
     * Get dtAtualizacao
     *
     * @return \DateTime 
     */
    public function getDtAtualizacao()
    {
        return $this->dtAtualizacao;
    }
}
