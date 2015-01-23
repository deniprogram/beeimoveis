<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbUsuario
 *
 * @ORM\Table(name="tb_usuario", indexes={@ORM\Index(name="FK_USUARIO_PESSAO_idx", columns={"id_pessoa"})})
 * @ORM\Entity(repositoryClass="UsuarioBundle\Repository\UsuarioRepository")
 */
class TbUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="no_email", type="string", length=100, nullable=false)
     */
    private $noEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="no_senha", type="string", length=32, nullable=false)
     */
    private $noSenha;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_ativo", type="integer", nullable=false)
     */
    private $stAtivo = '0';

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
     * @var \TbPessoa
     *
     * @ORM\ManyToOne(targetEntity="TbPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TbPerfil", inversedBy="idUsuario")
     * @ORM\JoinTable(name="tb_usuario_perfil",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_perfil", referencedColumnName="id_perfil")
     *   }
     * )
     */
    private $idPerfil;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPerfil = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set noEmail
     *
     * @param string $noEmail
     * @return TbUsuario
     */
    public function setNoEmail($noEmail)
    {
        $this->noEmail = $noEmail;

        return $this;
    }

    /**
     * Get noEmail
     *
     * @return string 
     */
    public function getNoEmail()
    {
        return $this->noEmail;
    }

    /**
     * Set noSenha
     *
     * @param string $noSenha
     * @return TbUsuario
     */
    public function setNoSenha($noSenha)
    {
        $this->noSenha = $noSenha;

        return $this;
    }

    /**
     * Get noSenha
     *
     * @return string 
     */
    public function getNoSenha()
    {
        return $this->noSenha;
    }

    /**
     * Set stAtivo
     *
     * @param integer $stAtivo
     * @return TbUsuario
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
     * @return TbUsuario
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
     * @return TbUsuario
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
     * Set idPessoa
     *
     * @param \UsuarioBundle\Entity\TbPessoa $idPessoa
     * @return TbUsuario
     */
    public function setIdPessoa(\UsuarioBundle\Entity\TbPessoa $idPessoa = null)
    {
        $this->idPessoa = $idPessoa;

        return $this;
    }

    /**
     * Get idPessoa
     *
     * @return \UsuarioBundle\Entity\TbPessoa 
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * Add idPerfil
     *
     * @param \UsuarioBundle\Entity\TbPerfil $idPerfil
     * @return TbUsuario
     */
    public function addIdPerfil(\UsuarioBundle\Entity\TbPerfil $idPerfil)
    {
        $this->idPerfil[] = $idPerfil;

        return $this;
    }

    /**
     * Remove idPerfil
     *
     * @param \UsuarioBundle\Entity\TbPerfil $idPerfil
     */
    public function removeIdPerfil(\UsuarioBundle\Entity\TbPerfil $idPerfil)
    {
        $this->idPerfil->removeElement($idPerfil);
    }

    /**
     * Get idPerfil
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }
}
