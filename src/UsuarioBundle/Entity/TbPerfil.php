<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPerfil
 *
 * @ORM\Table(name="tb_perfil")
 * @ORM\Entity
 */
class TbPerfil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_perfil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPerfil;

    /**
     * @var string
     *
     * @ORM\Column(name="no_perfil", type="string", length=100, nullable=false)
     */
    private $noPerfil;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TbUsuario", mappedBy="idPerfil")
     */
    private $idUsuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUsuario = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idPerfil
     *
     * @return integer 
     */
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * Set noPerfil
     *
     * @param string $noPerfil
     * @return TbPerfil
     */
    public function setNoPerfil($noPerfil)
    {
        $this->noPerfil = $noPerfil;

        return $this;
    }

    /**
     * Get noPerfil
     *
     * @return string 
     */
    public function getNoPerfil()
    {
        return $this->noPerfil;
    }

    /**
     * Set stAtivo
     *
     * @param integer $stAtivo
     * @return TbPerfil
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
     * @return TbPerfil
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
     * @return TbPerfil
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

    /**
     * Add idUsuario
     *
     * @param \UsuarioBundle\Entity\TbUsuario $idUsuario
     * @return TbPerfil
     */
    public function addIdUsuario(\UsuarioBundle\Entity\TbUsuario $idUsuario)
    {
        $this->idUsuario[] = $idUsuario;

        return $this;
    }

    /**
     * Remove idUsuario
     *
     * @param \UsuarioBundle\Entity\TbUsuario $idUsuario
     */
    public function removeIdUsuario(\UsuarioBundle\Entity\TbUsuario $idUsuario)
    {
        $this->idUsuario->removeElement($idUsuario);
    }

    /**
     * Get idUsuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
