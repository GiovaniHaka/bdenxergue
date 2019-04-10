-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

CREATE TABLE Empresa (
ID_Empresa INTEGER PRIMARY KEY,
Nome_Empresa VARCHAR(50),
Endereco_Empresa VARCHAR(150),
Telefone_Empresa VARCHAR(14),
Email_Empresa VARCHAR(50),
Classificacao_Empresa INTEGER,
Contato_Empresa VARCHAR(150)
)

CREATE TABLE Lente (
ID_Lente INTEGER PRIMARY KEY,
ID_Empresa INTEGER FOREIGN KEY REFERENCES Empresa (ID_Empresa),
Esferico_Lente INTEGER,
Cilindrico_Lente INTEGER,
Eixo_Lente INTEGER,
Preco_Lente MONEY,
Forma_Pagamento_Lente VARCHAR(50),
Quantidade_Parcelas_Lente INTEGER,
Observacao_Lente VARCHAR(150)
)

