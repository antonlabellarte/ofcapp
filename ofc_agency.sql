-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 05, 2025 alle 13:37
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofc_agency`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `agenti`
--

CREATE TABLE `agenti` (
  `id` int(255) NOT NULL,
  `agente` varchar(255) NOT NULL,
  `numero_visita` varchar(255) NOT NULL,
  `id_cliente` int(255) NOT NULL,
  `ultima_visita` date NOT NULL,
  `note` varchar(255) NOT NULL,
  `attivita` varchar(255) NOT NULL,
  `aggiornamenti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `altre_posizioni_fornitori`
--

CREATE TABLE `altre_posizioni_fornitori` (
  `id` int(255) NOT NULL,
  `id_fornitore` int(255) DEFAULT NULL,
  `altra_posizione` text DEFAULT NULL,
  `telefono` text DEFAULT NULL,
  `mail` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `articoli`
--

CREATE TABLE `articoli` (
  `id` int(255) NOT NULL,
  `codice_articolo` varchar(255) NOT NULL,
  `importo_cadauno` varchar(255) NOT NULL,
  `quantita` int(255) NOT NULL,
  `sconto` varchar(255) NOT NULL,
  `id_preventivo` int(255) NOT NULL,
  `importo_scontato` int(255) NOT NULL,
  `descrizione` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `id` int(255) NOT NULL,
  `cliente` varchar(255) DEFAULT NULL,
  `ragione_sociale` varchar(255) DEFAULT NULL,
  `codice_fiscale` varchar(255) DEFAULT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `citta` varchar(255) DEFAULT NULL,
  `provincia` varchar(255) DEFAULT NULL,
  `cap` int(255) DEFAULT NULL,
  `regione` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `sito` varchar(255) DEFAULT NULL,
  `chiusura` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `pec` varchar(255) DEFAULT NULL,
  `agente` varchar(255) DEFAULT NULL,
  `sdi` varchar(255) DEFAULT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `partita_iva` varchar(255) DEFAULT NULL,
  `responsabile_scarico` varchar(255) DEFAULT NULL,
  `indirizzo_scarico` varchar(255) NOT NULL,
  `citta_scarico` varchar(255) DEFAULT NULL,
  `telefono_responsabile_scarico` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`id`, `cliente`, `ragione_sociale`, `codice_fiscale`, `indirizzo`, `citta`, `provincia`, `cap`, `regione`, `telefono`, `fax`, `sito`, `chiusura`, `categoria`, `pec`, `agente`, `sdi`, `iban`, `partita_iva`, `responsabile_scarico`, `indirizzo_scarico`, `citta_scarico`, `telefono_responsabile_scarico`, `note`, `tipo`, `created_at`, `updated_at`) VALUES
(1, '1001', 'Alfa S.r.l.', 'RSSMRA85M01H501U', 'Via Roma, 12', NULL, 'MI', 20100, 'Lombardia', '080808080', '02-12345678', 'www.alfasrl.com', '18:00', 'Commercio\"\"\"', 'alfasrl@pec.it', 'Marco Bianchi\"\"\"', 'ABCD123', 'IT60X0542811101000000123456', '01234567890', 'Luigi Rossi', '', 'Torino', '011-2345678', 'Nessuna', 'Privato', NULL, '2024-10-14 21:05:30.000000'),
(2, '1002', 'Beta S.p.A.', 'CSTFNC80A01F205Y', 'Viale Libertà, 23', 'Roma', 'RM', 185, 'Lazio', '', '06-87654321', 'www.betaspa.it', '19:00', 'Industria', 'betaspa@pec.it', 'Sara Verdi', 'EFGH456', 'IT75P0306909606100000012345', '09876543210', 'Mario Verdi', '', 'Napoli', '081-1234567', 'Ordini prioritari', 'Azienda', NULL, NULL),
(3, '1003', 'Gamma Group', 'CLZPLZ88D13H703S', 'Via dei Mille, 56', 'Firenze', 'FI', 50100, 'Toscana', '', '055-2345678', 'www.gammagroup.com', '17:30', 'Servizi', 'gammagroup@pec.it', 'Elisa Neri', 'IJKL789', 'IT46A0347501601050123456789', '12345678901', 'Antonio Neri', '', 'Bologna', '051-7654321', 'Richiede firma all\'arrivo', 'Azienda', NULL, NULL),
(4, '1004', 'Delta Impianti S.r.l.', 'RSTGVL92R01B208V', 'Corso Italia, 45', 'Napoli', 'NA', 80100, 'Campania', '', '081-9876543', 'www.deltaimpiantisrl.it', '16:00', 'Costruzioni', 'deltaimpianti@pec.it', 'Luca Conti', 'MNOP012', 'IT18D0569601601012345678901', '23456789012', 'Giovanni Conti', '', 'Salerno', '089-1237890', 'Necessaria conferma di scarico', 'Azienda', NULL, NULL),
(5, '1005', 'Epsilon Informatica', 'LZZFBR79S12E793N', 'Via Garibaldi, 78', 'Palermo', 'PA', 90100, 'Sicilia', '', '091-6543210', 'www.epsiloninformatica.it', '20:00', 'Informatica', 'epsilonsrl@pec.it', 'Fabio Rossi', 'QRST345', 'IT91F0103070400012345678901', '34567890123', 'Alessia Bianchi', '', 'Catania', '095-7654321', 'Chiamare prima di scaricare', 'Privato', NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `collaboratori_clienti`
--

CREATE TABLE `collaboratori_clienti` (
  `id` int(255) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `responsabile_o_luogo` varchar(255) NOT NULL,
  `cellulare` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `ruolo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `fornitori`
--

CREATE TABLE `fornitori` (
  `id` int(255) NOT NULL,
  `ditta` varchar(255) DEFAULT NULL,
  `ragione_sociale` varchar(255) DEFAULT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `citta` varchar(255) DEFAULT NULL,
  `provincia` varchar(255) DEFAULT NULL,
  `cap` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `pec` varchar(255) DEFAULT NULL,
  `direzione` varchar(255) DEFAULT NULL,
  `telefono_direzione` varchar(255) DEFAULT NULL,
  `mail_direzione` varchar(255) DEFAULT NULL,
  `commerciale` varchar(255) DEFAULT NULL,
  `telefono_commerciale` varchar(255) DEFAULT NULL,
  `mail_commerciale` varchar(255) DEFAULT NULL,
  `amministrazione` varchar(255) DEFAULT NULL,
  `telefono_amministrazione` varchar(255) DEFAULT NULL,
  `mail_amministrazione` varchar(255) DEFAULT NULL,
  `agente` varchar(255) DEFAULT NULL,
  `sdi` varchar(255) DEFAULT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `partita_iva` varchar(255) DEFAULT NULL,
  `costi_di_trasporto` varchar(255) DEFAULT NULL,
  `condizioni_di_vendita` varchar(255) DEFAULT NULL,
  `minimo_dordine` varchar(255) DEFAULT NULL,
  `pagamenti` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `fornitori`
--

INSERT INTO `fornitori` (`id`, `ditta`, `ragione_sociale`, `indirizzo`, `citta`, `provincia`, `cap`, `telefono`, `fax`, `pec`, `direzione`, `telefono_direzione`, `mail_direzione`, `commerciale`, `telefono_commerciale`, `mail_commerciale`, `amministrazione`, `telefono_amministrazione`, `mail_amministrazione`, `agente`, `sdi`, `iban`, `partita_iva`, `costi_di_trasporto`, `condizioni_di_vendita`, `minimo_dordine`, `pagamenti`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Omega Tech S.r.l.', 'Omega Tech S.r.l.', 'Via delle Rose, 10', 'Milano', 'MI', '20121', '02-6543210', '02-9876543', 'omegatech@pec.it', 'Anna Rossi', '02-6543220', 'a.rossi@omegatech.it', 'Luca Bianchi', '02-6543230', 'l.bianchi@omegatech.it', 'Giulia Verdi', '02-6543240', 'g.verdi@omegatech.it', 'Marco Neri', 'ABCD123', 'IT60X0542811101000000654321', '01234567891', '50€', 'Franco fabbrica', '100', 'Bonifico', 'Nessuna', NULL, NULL),
(2, 'Sigma S.p.A.', 'Sigma S.p.A.', 'Corso Italia, 55', 'Roma', 'RM', '00185', '06-5432109', '06-8765432', 'sigmaspa@pec.it', 'Paolo Conti', '06-5432110', 'p.conti@sigmaspa.it', 'Francesca Russo', '06-5432120', 'f.russo@sigmaspa.it', 'Roberto Rossi', '06-5432130', 'r.rossi@sigmaspa.it', 'Laura Neri', 'EFGH456', 'IT75P0306909606100000054321', '09876543211', '75€', 'Ex works', '200', 'Assegno', 'Consegne entro 7 giorni', NULL, NULL),
(3, 'Beta Componenti', 'Beta Componenti', 'Via Roma, 30', 'Firenze', 'FI', '50122', '055-7654321', '055-2345670', 'betacomponenti@pec.it', 'Andrea Ferrari', '055-7654331', 'a.ferrari@betacomponenti.it', 'Laura Bianchi', '055-7654341', 'l.bianchi@betacomponenti.it', 'Marco Conti', '055-7654351', 'm.conti@betacomponenti.it', 'Elisa Verdi', 'IJKL789', 'IT46A0347501601050674321012', '12345678912', '100€', 'DDP', '150', 'Contanti', 'Richiedere sconto per ordini', NULL, NULL),
(4, 'Delta Distribuzioni', 'Delta Distribuzioni', 'Via Garibaldi, 85', 'Napoli', 'NA', '80134', '081-8765432', '081-6543219', 'deltadistribuzioni@pec.it', 'Simone Neri', '081-8765443', 's.neri@deltadistribuzioni.it', 'Marta Rossi', '081-8765453', 'm.rossi@deltadistribuzioni.it', 'Chiara Verdi', '081-8765463', 'c.verdi@deltadistribuzioni.it', 'Fabio Bianchi', 'MNOP012', 'IT18D0569601601010765432101', '23456789013', '50€', 'FCA', '250', 'CartaCredito', 'Priorità agli ordini urgenti', NULL, NULL),
(5, 'Gamma Logistica', 'Gamma Logistica S.r.l', 'Strada Statale, 12', 'Torino', 'TO', '10122', '011-5432109', '011-9876543', 'gammalogistica@pec.it', 'Lorenzo Bianchi', '011-5432110', 'l.bianchi@gammalogistica.it', 'Alice Verdi', '011-5432120', 'a.verdi@gammalogistica.it', 'Stefano Rossi', '011-5432130', 's.rossi@gammalogistica.it', 'Seleziona un agente', NULL, NULL, NULL, '60€', 'CIF', '100', NULL, 'test', NULL, '2025-01-20'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-25', '2025-01-25'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-25', '2025-01-25');

-- --------------------------------------------------------

--
-- Struttura della tabella `mail_clienti`
--

CREATE TABLE `mail_clienti` (
  `id` int(255) NOT NULL,
  `id_cliente` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `id` int(255) NOT NULL,
  `data` date DEFAULT NULL,
  `id_cliente` int(255) DEFAULT NULL,
  `id_fornitore` int(255) DEFAULT NULL,
  `agente` varchar(255) DEFAULT NULL,
  `descrizione` varchar(255) DEFAULT NULL,
  `codice_ordine` varchar(255) DEFAULT NULL,
  `pagamento` varchar(255) DEFAULT NULL,
  `oneri_vari` varchar(255) DEFAULT NULL,
  `codice_articolo` varchar(255) DEFAULT NULL,
  `importo_cadauno` varchar(255) DEFAULT NULL,
  `quantita` int(255) DEFAULT NULL,
  `sconto` int(255) DEFAULT NULL,
  `importo_totale` int(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `ordini`
--

INSERT INTO `ordini` (`id`, `data`, `id_cliente`, `id_fornitore`, `agente`, `descrizione`, `codice_ordine`, `pagamento`, `oneri_vari`, `codice_articolo`, `importo_cadauno`, `quantita`, `sconto`, `importo_totale`, `note`, `created_at`, `updated_at`) VALUES
(15, '2024-09-17', 1, 1, 'A', 'test', '0001', 'pagah', '1200', '0101', '2000', 1, 50, 1000, 'musicali', '2024-09-16 21:48:44.000000', '2024-09-17 21:55:39.000000'),
(16, '2024-09-17', 1, 1, 'A', 'test', '010101', 'pagah', NULL, '0001', '1000', 1, 50, 500, '34545', '2024-09-17 21:25:24.000000', '2024-09-17 21:51:11.000000');

-- --------------------------------------------------------

--
-- Struttura della tabella `preventivi`
--

CREATE TABLE `preventivi` (
  `id` int(255) NOT NULL,
  `id_cliente` int(255) NOT NULL,
  `id_fornitore` int(255) NOT NULL,
  `agente` varchar(255) NOT NULL,
  `descrizione` int(255) NOT NULL,
  `codice_ordine` int(255) NOT NULL,
  `pagamento` varchar(255) NOT NULL,
  `onerI_vari` varchar(255) NOT NULL,
  `sconto` int(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `importo_totale` int(255) NOT NULL,
  `iva` int(255) NOT NULL,
  `importo_iva` int(255) NOT NULL,
  `importo_totale_scontato` int(255) NOT NULL,
  `data_di_consegna` date NOT NULL,
  `consegna` varchar(255) NOT NULL,
  `imballo` varchar(255) NOT NULL,
  `resa` varchar(255) NOT NULL,
  `spedizione` varchar(255) NOT NULL,
  `pagamento_preventivo` varchar(255) NOT NULL,
  `trasportoPreventivo` int(255) NOT NULL,
  `banca` int(255) NOT NULL,
  `riferimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `telefono_clienti`
--

CREATE TABLE `telefono_clienti` (
  `id` int(255) NOT NULL,
  `id_cliente` int(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `visite`
--

CREATE TABLE `visite` (
  `id` int(255) NOT NULL,
  `agente` varchar(255) DEFAULT NULL,
  `numero_visita` varchar(255) DEFAULT NULL,
  `cliente` varchar(255) DEFAULT NULL,
  `ultima_visita` date DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `attivita` varchar(255) DEFAULT NULL,
  `aggiornamenti` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `visite`
--

INSERT INTO `visite` (`id`, `agente`, `numero_visita`, `cliente`, `ultima_visita`, `note`, `attivita`, `aggiornamenti`, `created_at`, `updated_at`) VALUES
(1, 'E', '1', 'Alfa S.r.l.', '2025-01-24', 'Testa', 'Testa', 'Testa', '2025-01-25', '2025-01-25'),
(3, 'A', '1', 'Delta Impianti S.r.l.', NULL, NULL, NULL, NULL, '2025-01-25', '2025-01-25');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `agenti`
--
ALTER TABLE `agenti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `altre_posizioni_fornitori`
--
ALTER TABLE `altre_posizioni_fornitori`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `articoli`
--
ALTER TABLE `articoli`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `collaboratori_clienti`
--
ALTER TABLE `collaboratori_clienti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `fornitori`
--
ALTER TABLE `fornitori`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `mail_clienti`
--
ALTER TABLE `mail_clienti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`id_cliente`),
  ADD KEY `fornitore` (`id_fornitore`);

--
-- Indici per le tabelle `preventivi`
--
ALTER TABLE `preventivi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `telefono_clienti`
--
ALTER TABLE `telefono_clienti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `agenti`
--
ALTER TABLE `agenti`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `altre_posizioni_fornitori`
--
ALTER TABLE `altre_posizioni_fornitori`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `articoli`
--
ALTER TABLE `articoli`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT per la tabella `collaboratori_clienti`
--
ALTER TABLE `collaboratori_clienti`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `fornitori`
--
ALTER TABLE `fornitori`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `mail_clienti`
--
ALTER TABLE `mail_clienti`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `preventivi`
--
ALTER TABLE `preventivi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `telefono_clienti`
--
ALTER TABLE `telefono_clienti`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `visite`
--
ALTER TABLE `visite`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `ordini`
--
ALTER TABLE `ordini`
  ADD CONSTRAINT `cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clienti` (`id`),
  ADD CONSTRAINT `fornitore` FOREIGN KEY (`id_fornitore`) REFERENCES `fornitori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
