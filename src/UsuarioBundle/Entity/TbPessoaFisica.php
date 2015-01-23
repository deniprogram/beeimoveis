<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPessoaFisica
 *
 * @ORM\Table(name="tb_pessoa_fisica", indexes={@ORM\Index(name="FK_PESSOAFISICA_PESSOA_idx", columns={"id_pessoa"})})
 * @ORM\Entity
 */
class TbPessoaFisica
{
    /**
     * @var string
     *
     * @ORM\Column(name="no_pessoa", type="string", length=100, nullable=false)
     */
    private $noPessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="no_sobrenome", type="string", length=150, nullable=true)
     */
    private $noSobrenome;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_cpf", type="integer", nullable=true)
     */
    private $nuCpf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_nascimento", type="datetime", nullable=true)
     */
    private $dtNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="sg_sexo", type="string", length=1, nullable=false)
     */
    private $sgSexo;

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
     * Set noPessoa
     *
     * @param string $noPessoa
     * @return TbPessoaFisica
     */
    public function setNoPessoa($noPessoa)
    {
        $this->noPessoa = $noPessoa;

        return $this;
    }

    /**
     * Get noPessoa
     *
     * @return string 
     */
    public function getNoPessoa()
    {
        return $this->noPessoa;
    }

    /**
     * Set noSobrenome
     *
     * @param string $noSobrenome
     * @return TbPessoaFisica
     */
    public function setNoSobrenome($noSobrenome)
    {
        $this->noSobrenome = $noSobrenome;

        return $this;
    }

    /**
     * Get noSobrenome
     *
     * @return string 
     */
    public function getNoSobrenome()
    {
        return $this->noSobrenome;
    }

    /**
     * Set nuCpf
     *
     * @param integer $nuCpf
     * @return TbPessoaFisica
     */
    public function setNuCpf($nuCpf)
    {
        $this->nuCpf = $nuCpf;

        return $this;
    }

    /**
     * Get nuCpf
     *
     * @return integer 
     */
    public function getNuCpf()
    {
        return $this->nuCpf;
    }

    /**
     * Set dtNascimento
     *
     * @param \DateTime $dtNascimento
     * @return TbPessoaFisica
     */
    public function setDtNascimento($dtNascimento)
    {
        $this->dtNascimento = $dtNascimento;

        return $this;
    }

    /**
     * Get dtNascimento
     *
     * @return \DateTime 
     */
    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    /**
     * Set sgSexo
     *
     * @param string $sgSexo
     * @return TbPessoaFisica
     */
    public function setSgSexo($sgSexo)
    {
        $this->sgSexo = $sgSexo;

        return $this;
    }

    /**
     * Get sgSexo
     *
     * @return string 
     */
    public function getSgSexo()
    {
        return $this->sgSexo;
    }

    /**
     * Set idPessoa
     *
     * @param \UsuarioBundle\Entity\TbPessoa $idPessoa
     * @return TbPessoaFisica
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
