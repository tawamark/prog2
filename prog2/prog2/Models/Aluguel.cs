using System;

namespace Imobiliaria.Models
{
    public class Aluguel
    {
        public int Id { get; set; }

        public int ImovelId { get; set; }
        public Imovel Imovel { get; set; }

        public int ClienteId { get; set; }
        public Cliente Cliente { get; set; }

        public DateTime DataInicio { get; set; }
        public DateTime? DataFim { get; set; }
        public decimal ValorMensal { get; set; }
    }
}
