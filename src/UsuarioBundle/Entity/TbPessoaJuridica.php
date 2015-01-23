<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPessoaJuridica
 *
 * @ORM\Table(name="tb_pessoa_juridica", indexes={@ORM\Index(name="FK_PESSOAJURIDICA_PESSOA_idx", columns={"id_pessoa"})})
 * @ORM\Entity
 */
class TbPessoaJuridica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nu_cnpj", type="integer", nullable=false)
     */
    private $nuCnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="no_razao_social", type="string", length=100, nullable=true)
     */
    private $noRazaoSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="no_fantansia", type="string", length=100, nullable=true)
     */
    private $noFantansia;

    /**
     * @var \TbPessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TbPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoa;



    /**
     * Set nuCnpj
     *
     * @param integer $nuCnpj
     * @return TbPessoaJuridica
     */
    public function setNuCnpj($nuCnpj)
    {
        $this->nuCnpj = $nuCnpj;

        return $this;
    }

    /**
     * Get nuCnpj
     *
     * @return integer 
     */
    public function getNuCnpj()
    {
        return $this->nuCnpj;
    }

    /**
     * Set noRazaoSocial
     *
     * @param string $noRazaoSocial
     * @return TbPessoaJuridica
     */
    public function setNoRazaoSocial($noRazaoSocial)
    {
        $this->noRazaoSocial = $noRazaoSocial;

        return $this;
    }

    /**
     * Get noRazaoSocial
     *
     * @return string 
     */
    public function getNoRazaoSocial()
    {
        return $this->noRazaoSocial;
    }

    /**
     * Set noFantansia
     *
     * @param string $noFantansia
     * @return TbPessoaJuridica
     */
    public function setNoFantansia($noFantansia)
    {
        $this->noFantansia = $noFantansia;

        return $this;
    }

    /**
     * Get noFantansia
     *
     * @return string 
     */
    public function getNoFantansia()
    {
        return $this->noFantansia;
    }

    /**
     * Set idPessoa
     *
     * @param \UsuarioBundle\Entity\TbPessoa $idPessoa
     * @return TbPessoaJuridica
     */
    public function setIdPessoa(\UsuarioBundle\Entity\TbPessoa $idPessoa)
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
}
