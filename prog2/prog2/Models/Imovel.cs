using prog2.Models;
using System;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace Imobiliaria.Models
{
    public class Imovel
    {
        public int Id { get; set; }

        [Required]
        [StringLength(150)]
        public string Endereco { get; set; }

        [Required]
        public decimal Valor { get; set; }

        public int Quartos { get; set; }
        public int Banheiros { get; set; }
        public bool PossuiGaragem { get; set; }

        public int ProprietarioId { get; set; }
        public Proprietario Proprietario { get; set; }
    }
}
