-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jun-2021 às 22:39
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldoftips`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avalies`
--

CREATE TABLE `avalies` (
  `tips_id` int(11) DEFAULT NULL,
  `users` int(11) DEFAULT NULL,
  `aval` int(11) DEFAULT NULL,
  `situation` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tips`
--

CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `game` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `content` longtext,
  `situation` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tips`
--

INSERT INTO `tips` (`id`, `users_id`, `title`, `game`, `category`, `content`, `situation`) VALUES
(6, 9, 'Teste', 'Jogo Qualquer', 'Categoria Qualquer', 'TESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTETESTE', 1),
(9, 9, 'Como Jogar Xadrez', 'xadrez', 'estratÃ©gia', 'As regras do xadrez ou Leis do Xadrez sÃ£o um conjunto de regras que regem a prÃ¡tica do jogo de Xadrez em todo o mundo. Enquanto as origens do xadrez nÃ£o sÃ£o claras, as regras modernas do xadrez foram modeladas primeiramente na ItÃ¡lia, durante o sÃ©culo XVI. As regras do xadrez foram sendo alteradas lentamente atÃ© o inÃ­cio do sÃ©culo XIX, quando obtiveram a atual forma. As regras tambÃ©m podem variar de um lugar para outro. Atualmente, a FederaÃ§Ã£o Internacional de Xadrez (FIDE), determina as regras padrÃ£o, com pequenas modificaÃ§Ãµes feitas por algumas federaÃ§Ãµes nacionais para prÃ³prias peculiaridades. Existem variaÃ§Ãµes das regras para o xadrez tais quais: postal, xadrez rÃ¡pido, xadrez online e variantes para o jogo de xadrez. As regras atualmente vigentes foram aprovadas durante o 77Âº Congresso da FIDE realizado na cidade de Dresden na Alemanha em novembro de 2008, tendo entrado em vigor no dia 1Âº de julho de 2009.\r\n\r\nO jogo de Xadrez Ã© disputado por duas pessoas em um tabuleiro de xadrez, com 32 peÃ§as (16 para cada jogador) de seis tipos diferentes. Cada tipo de peÃ§a move-se de forma distinta. O objetivo do jogo Ã© dar o xeque-mate ao rei adversÃ¡rio, isto Ã©, ameaÃ§ar o Rei do oponente com a captura inevitÃ¡vel. Os jogos nÃ£o precisam terminar necessariamente com o xeque-mate pois os jogadores podem desistir a qualquer momento se acreditarem que perderÃ£o a partida. AlÃ©m disso, existem vÃ¡rias formas de um jogo terminar empatado.\r\n\r\nAs regras nÃ£o sÃ³ gerem o movimento bÃ¡sico das peÃ§as como tambÃ©m determinam o equipamento usado, o controle de tempo, a conduta e Ã©tica dos jogadores, acomodaÃ§Ãµes para jogadores com necessidades especiais, o registro dos lances usando notaÃ§Ã£o de xadrez, bem como procedimentos com as penalidades em caso de irregularidades que porventura possam ocorrer durante uma partida de xadrez.\r\n\r\nObjetivo do xadrez\r\n\r\nO objetivo do jogo de xadrez Ã© dar xeque-mate ao Rei adversÃ¡rio, ou seja, colocando-o sob ameaÃ§a de captura (xeque), sem que ele tenha como escapar desse xeque. Para isto, cada jogador dispÃµe de 16 peÃ§as, sendo:\r\n\r\n1 Rei\r\n1 Dama\r\n2 Bispos\r\n2 Cavalos\r\n2 Torres\r\n8 PeÃµes\r\n\r\nOs movimentos sÃ£o alternados, sendo que o enxadrista que detÃ©m as peÃ§as brancas sempre faz o primeiro lance. Nunca o enxadrista pode Â§passar a vezÂ§ ou deixar de realizar uma jogada.\r\n\r\nO objetivo secundÃ¡rio do jogo Ã© proteger o seu prÃ³prio Rei, evitando que ele leve o xeque-mate. Ã‰ proibido no xadrez colocar o prÃ³prio Rei em xeque, ou, quando em xeque, fazer outra jogada que nÃ£o tirÃ¡-lo do xeque.\r\n\r\nMovimento e captura das peÃ§as\r\n\r\nTodas as peÃ§as (com exceÃ§Ã£o do Cavalo), independente de quantas casas andem, tÃªm seu raio de aÃ§Ã£o limitado pelas outras peÃ§as, amigas ou inimigas, ou seja, caso uma peÃ§a amiga esteja em seu caminho, ela nÃ£o poderÃ¡ parar nesta casa, ou em qualquer outra casa que, para chegar atÃ© ela, deva passar pela casa ocupada. No caso de uma peÃ§a inimiga, ainda nÃ£o Ã© permitido chegar em uma casa passando pela casa ocupada, porÃ©m, Ã© possÃ­vel capturar (tomar) a peÃ§a adversÃ¡ria, removendo-a do jogo e posicionando a peÃ§a captora na casa que a peÃ§a inimiga ocupava no tabuleiro.\r\n\r\nTorre\r\n\r\nTorre - A torre se movimenta em direÃ§Ãµes ortogonais, isto Ã©, pelas linhas (horizontais) e colunas (verticais), nÃ£o podendo se mover pelas diagonais. Ela pode mover quantas casas desejar se estiverem desocupadas pelas colunas e linhas, porÃ©m, apenas em um sentido em cada jogada.\r\n\r\nBispo\r\n\r\nBispo - xadrezO bispo se movimenta nas direÃ§Ãµes diagonais, nÃ£o podendo se mover pelas ortogonais como as torres. Ele pode mover quantas casas quiser pelas diagonais, porÃ©m, apenas em um sentido em cada jogada e desde que as mesmas estejam desobstruÃ­das.\r\n\r\nDama (Rainha)\r\n\r\nDama - A Dama (tambÃ©m chamada de Rainha) pode movimentar-se quantas casas queira, tanto na diagonal, como na vertical ou na horizontal, porÃ©m, apenas em um sentido em cada jogada.\r\n\r\nRei\r\n\r\nRei - Pode mover-se em todas as direÃ§Ãµes, mas limitado somente Ã  sua casa vizinha. O Rei pode fazer um movimento especial chamado roque com a torre desde que:\r\n\r\n- nenhuma das duas peÃ§as tenha sido ainda movimentada durante a partida;\r\n- nÃ£o haja nenhuma peÃ§a amiga entre o rei e a torre, e\r\n- nenhuma das casas pelas quais o rei irÃ¡ passar ou ficar esteja sob ataque de peÃ§a inimiga.\r\n\r\nSomente assim podendo ser feito o roque, que pode ser o roque pequeno ou o grande.\r\n\r\nO rei pode capturar, tambÃ©m, qualquer peÃ§a adversÃ¡ria, com exceÃ§Ã£o do rei adversÃ¡rio. Um rei deverÃ¡ manter distÃ¢ncia mÃ­nima de duas casas do outro rei, se nÃ£o serÃ¡ considerado um lance irregular.\r\n\r\nPeÃ£o\r\n\r\npeÃ£o - O peÃ£o Ã© a Ãºnica peÃ§a do xadrez que nunca retrocede no tabuleiro. Portanto, quando se encontra na segunda fila [a2-h2 das brancas, a7-h7 das pretas] sempre estarÃ¡ disponÃ­vel para fazer o seu primeiro movimento. Nesse caso ele pode Â§optarÂ§ entre Â§andarÂ§ uma ou duas casas sempre na mesma coluna. Passando da segunda fila, nÃ£o mais pode se deslocar duas casas, mesmo que nÃ£o o tenha feito em seu primeiro movimento. Ao contrÃ¡rio das demais peÃ§as do xadrez, quando vai capturar uma peÃ§a, seu movimento Ã© diferente: ele desloca-se na diagonal, andando apenas uma casa, sempre para frente. O peÃ£o nÃ£o pode capturar para trÃ¡s, e nÃ£o captura peÃ§as que obstruam o seu caminho. Assim, qualquer peÃ§a (inclusive um outro peÃ£o), pode parar a marcha de um peÃ£o.\r\n\r\nUma vez que um peÃ£o nÃ£o anda para trÃ¡s, caso ele alcance a Ãºltima fileira do tabuleiro (fileira 8 para as brancas ou 1 para as pretas) o jogador deve promover seu peÃ£o, transformando-o em qualquer outra peÃ§a menos o rei e peÃ£o (dama, torre, bispo ou cavalo). O peÃ£o pode se transformar em qualquer das quatro peÃ§as, mesmo que haja outras em jogo. Ã‰ possÃ­vel, entÃ£o, possuir duas ou mais damas, trÃªs ou mais torres, ou situaÃ§Ãµes semelhantes.\r\n\r\nCavalo\r\n\r\nCavalo - XadrezO movimento do cavalo corresponde ao movimento em Â§LÂ§. CÃ­rculo este que corresponde ao movimento octogonal permitido pelo quadriculado do tabuleiro. Ele pode andar em Â§forma de LÂ§, ou seja, anda duas casas em linha reta e depois uma casa para o lado. Ao colocar uma peÃ§a em cada posiÃ§Ã£o disponÃ­vel do movimento do Cavalo, vocÃª verÃ¡ que elas formam um cÃ­rculo no tabuleiro. O Cavalo goza de uma liberdade especial em seu movimento, podendo pular qualquer peÃ§a, inclusive as do adversÃ¡rio. Captura as peÃ§as adversÃ¡rias que estejam em sua casa de chegada, mas nÃ£o pode ir para uma casa ocupada por uma peÃ§a amiga.\r\n\r\nMovimentos extraordinÃ¡rios\r\n \r\nRoque\r\n\r\nO roque Ã© um lance do rei com qualquer das suas duas torres situada na mesma fileira e Ã© considerado como um lance de rei apenas.O roque coloca o Rei em seguranÃ§a e permite colocar a sua torre em uma posiÃ§Ã£o mais centralizada no tabuleiro. O roque tem suas variantes: o roque longo, tambÃ©m chamada de roque do lado da dama e o roque curto, tambÃ©m chamada de roque do lado do rei. Para se executar ambos, move-se o rei duas casas para qualquer lado na horizontal e move-se a torre para a casa imediatamente anterior.\r\n\r\nPara que o roque seja executado deve-se observar certas condiÃ§Ãµes que devem ser seguidas para que o movimento seja vÃ¡lido. SÃ£o elas:\r\n\r\nNem rei nem a torre usada no roque podem ter sido mexidos alguma vez antes no jogo.\r\nO rei nÃ£o pode estar em xeque antes do roque ser feito e nem pode ficar em xeque apÃ³s a realizaÃ§Ã£o do mesmo.\r\nNenhuma casa que o rei irÃ¡ passar para realizar o roque pode estar ameaÃ§ada por uma peÃ§a adversÃ¡ria.\r\nO caminho da torre e do rei devem estar totalmente desobstruÃ­dos, seja por peÃ§as amigas ou adversÃ¡rias.\r\n\r\nObs.: como o Roque Ã© um lance do Rei, o mesmo deve ser movido primeiro. Caso o jogador tocar primeiro em sua torre, deverÃ¡ fazer um movimento com a mesma, nÃ£o podendo mais fazer o roque nesse lance e nem mais com essa torre (pois a mesma jÃ¡ terÃ¡ sido mexida).\r\n\r\nCaptura Â§en passantÂ§\r\n\r\nEn passant Ã© um termo francÃªs que significa na passagem sendo um movimento especial de captura de peÃ£o por outro peÃ£o. O peÃ£o, como descrito acima, pode andar duas casas na primeira vez que se move. Entretanto, os peÃµes adversÃ¡rios podem capturar o peÃ£o que anda duas casas como se este tivesse andado apenas uma casa, caracterizando uma captura en passant. Neste caso, a captura deve ser feita imediatamente apÃ³s o emparelhamento dos peÃµes nÃ£o podendo ser feita depois. Como todas as outras capturas, a tomada en passant\r\nÃ© facultativa.\r\n\r\nTirando o Rei de Xeque\r\n\r\nPara retirar o Rei de xeque, o jogador deve tentar os trÃªs passos abaixo:\r\n\r\nMovimentar o Rei para uma casa em que ele nÃ£o esteja em xeque;\r\nColocar uma peÃ§a entre o Rei e a peÃ§a que estÃ¡ dando o xeque, ou;\r\nCapturar a peÃ§a que estÃ¡ dando xeque ao Rei.\r\nQuando nÃ£o hÃ¡ possibilidade de se fazer nenhum desses trÃªs passos, caracterizando xeque-mate e a partida acaba imediatamente.\r\n\r\nVitÃ³ria\r\n\r\nExistem dois modos de se obter a vitÃ³ria durante uma partida de Xadrez:\r\n\r\nAdversÃ¡rio desistir ou abandonar o jogo.\r\nXeque-mate ao rei adversÃ¡rio\r\n\r\nEmbora seja costume de muitos jogadores, o aviso do xeque, diferente de como alguns pensam, nÃ£o Ã© de forma alguma obrigatÃ³ria, sendo, em algumas partidas blitz (relÃ¢mpago) de campeonato, inclusive desaconselhado.\r\n\r\nEmpate\r\n\r\nUma partida Ã© considerada empatada, quando:\r\n\r\nO jogador que tiver a vez de jogar nÃ£o puder realizar nenhuma jogada legal. Esse empate Ã© conhecido como pat, pelos franceses, ahogado, em espanhol, ou simplesmente, empate por afogamento, rei afogado.\r\nUm dos jogadores propuser e o outro aceitar o empate.\r\n\r\nEm campeonatos, a regra Ã© um pouco mais restrita: um jogador deve propor enquanto seu tempo estiver correndo o empate, e acionar o relÃ³gio. O outro jogador deve anunciar que aceita o empate, recusar, ou simplesmente fazer a sua jogada, sinal que recusou o pedido, e nÃ£o poderÃ¡ mais tarde (se a situaÃ§Ã£o do tabuleiro mudar) Â§aceitarÂ§ o empate. ApÃ³s essa recusa, apenas o jogador que recusou o empate pode fazer outra proposta, para evitar que um jogador fique constantemente pedindo empate, incomodando o adversÃ¡rio.\r\nEsse modo de propor o empate Ã© o correto, e nÃ£o o visto no filme Lances Inocentes, onde o protagonista estende a mÃ£o declarando empate, aguardando o seu oponente apertÃ¡-la como sinal de que aceita.\r\n\r\nNenhum dos jogadores contar com material suficiente para dar xeque-mate no adversÃ¡rio. Ã‰ considerado material insuficiente o rei e um bispo, o rei e um cavalo ou o rei e dois cavalos contra um rei sozinho. Isso nÃ£o significa, portanto, que nÃ£o Ã© possÃ­vel dar um mate apenas com um cavalo. Mas sÃ³ Ã© possÃ­vel se houver outras peÃ§as inimigas impedindo o caminho do rei inimigo. O mate com dois cavalos e rei contra rei sÃ³ ocorre se o oponente errar ao fugir com o rei, portanto dois cavalos sÃ£o considerados como material insuficiente para dar mate.\r\nPor causa da promoÃ§Ã£o, um peÃ£o sempre Ã© considerado Â§materialÂ§ suficiente para mate, embora ele como peÃ£o nÃ£o possa sozinho (ou com ajuda do rei) dar xeque mate.\r\n\r\nOcorrer um xeque-perpÃ©tuo, em que um jogador pode ficar permanentemente colocando o rei do outro em xeque, nÃ£o importa o que o outro faÃ§a, sem que o jogador manifeste intenÃ§Ã£o de jogar diferentemente.\r\nSÃ£o efetuados 50 lances sem captura de peÃ§as e sem movimento de peÃµes.\r\nUma dada posiÃ§Ã£o ocorrer trÃªs vezes durante uma partida. Note que se um simples peÃ£o for avanÃ§ado uma casa, a posiÃ§Ã£o jÃ¡ nÃ£o Ã© mais a mesma e a contagem recomeÃ§a.\r\n\r\nLances irregulares\r\n\r\nMover uma peÃ§a de forma que nÃ£o siga os movimentos vÃ¡lidos para a mesma. Por exemplo, um bispo sÃ³ pode mover-se na diagonal. Se o bispo for movido na vertical, serÃ¡ um lance irregular, devendo o mesmo retornar ao seu lugar e o jogador fazer uma jogada legal com o bispo, caso houver essa possibilidade, senÃ£o poderÃ¡ mover outra peÃ§a.\r\nO rei estando em xeque, o jogador faz um movimento cujo resultado ainda mantenha em xeque o rei. Nesse caso, o lance deverÃ¡ voltar e o jogador deverÃ¡ movimentar a mesma peÃ§a para uma posiÃ§Ã£o que tire o rei do xeque, caso possÃ­vel, senÃ£o poderÃ¡ fazer qualquer outro lance que tire o rei do xeque.\r\nFazer um lance que coloque o seu rei em xeque. Novamente o lance deverÃ¡ ser desfeito e deverÃ¡ ser feito outro lance com a mesma peÃ§a, desde que haja algum lance vÃ¡lido para a mesma.\r\n\r\n', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `mail` varchar(320) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `situation` tinyint(1) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `user_name`, `birthdate`, `mail`, `pass`, `situation`, `user_type_id`) VALUES
(9, 'Tester', '2002-09-30', 'juriscleicon@gmail.com', '573bf6dc27dc569b56ac118e4bf529b8', 1, 2),
(10, 'Gustavo', '2002-09-30', 'gustavo.tronic@gmail.com', 'abf87b2fdfdd7f367873b23d459c0a6d', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `type_user` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_type`
--

INSERT INTO `user_type` (`id`, `type_user`) VALUES
(1, 'admin'),
(2, 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tips`
--
ALTER TABLE `tips`
  ADD CONSTRAINT `tips_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
