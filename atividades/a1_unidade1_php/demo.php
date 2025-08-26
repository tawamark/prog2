<?php
declare(strict_types=1);

require __DIR__.'/01_produto_publico.php';
require __DIR__.'/02_produto_encapsulado.php';
require __DIR__.'/03_conta_bancaria.php';
require __DIR__.'/04_funcionario_gerente.php';
require __DIR__.'/05_usuario.php';
require __DIR__.'/06_config.php';
require __DIR__.'/07_pedido.php';
require __DIR__.'/08_cliente.php';
require __DIR__.'/09_conta_bancaria_segura.php';
require __DIR__.'/10_conexao_bd.php';

$p1 = new ProdutoPublico('Caderno', 12.5);
echo "1 {$p1->nome} {$p1->preco}\n";

$p2 = new ProdutoEncapsulado('Caneta', 4.0); $p2->setPreco(4.5);
echo "2 {$p2->nome} {$p2->getPreco()}\n";

$c1 = new ContaBancaria(); $c1->depositar(100); $c1->sacar(30);
echo "3 {$c1->getSaldo()}\n";

$g = new Gerente(2000); $g->setSalario(2500);
echo "4 {$g->getSalario()}\n";

$u = new Usuario('1234'); $ok = $u->verificarSenha('1234');
echo "5 ".($ok?'1':'0')."\n";

$app = new AppConfig(['tema'=>'claro']); $app->set('idioma','pt'); $tema = $app->get('tema');
$user = new UserConfig(); $user->merge(['notif'=>true]);
echo "6 {$tema} ".json_encode($user->all())."\n";

$ped = new Pedido(); $ped->inserir('Item A'); $ped->inserir('Item B');
echo "7 ".implode(',',$ped->listar())."\n";

$cli = new Cliente('Ana','000.000.000-00','(49) 99999-0000'); $interno = $cli->interno(); $nomePublico = $cli->nome;
echo "8 {$nomePublico} | {$interno}\n";

$c2 = new ContaBancariaSegura(); $c2->depositar(50); $saq1 = $c2->sacar(60); $saq2 = $c2->sacar(20);
echo "9 ".($saq1?'1':'0')." {$c2->getSaldo()} ".($saq2?'1':'0')." {$c2->getSaldo()}\n";

$db = new ConexaoBD(); $cx = $db->getConexao();
echo "10 ".json_encode($cx)."\n";
