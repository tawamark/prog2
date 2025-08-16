using System;
using System.ComponentModel.DataAnnotations.Schema;

namespace Imobiliaria.Models
{
    public class Venda
    {
        public int Id { get; set; }

        public int ImovelId { get; set; }
        public Imovel Imovel { get; set; }

        public int ClienteId { get; set; }
        public Cliente Cliente { get; set; }

        public DateTime DataVenda { get; set; }
        public decimal ValorVenda { get; set; }
    }
}
