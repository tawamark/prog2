using System.ComponentModel.DataAnnotations;

namespace Imobiliaria.Models
{
    public class Cliente
    {
        public int Id { get; set; }

        [Required]
        [StringLength(100)]
        public string Nome { get; set; }

        [StringLength(14)]
        public string CPF { get; set; }

        [StringLength(15)]
        public string Telefone { get; set; }

        [EmailAddress]
        public string Email { get; set; }
    }
}
