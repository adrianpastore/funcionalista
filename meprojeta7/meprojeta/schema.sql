CREATE DATABASE "meprojeta"

CREATE TABLE "empresa"(
    "idEmpresa" serial,
    "CNPJ" int UNIQUE NOT NULL,
    "nome" varchar(100) NOT NULL,
    "endereço" varchar(1000) NOT NULL,
    CONSTRAINT "empresaPK" PRIMARY KEY ("CNPJ")
)

CREATE TABLE "projetos"(
    "idProjeto" serial,
    "nome" varchar(100) NOT NULL,
    "descricao" varchar(1000) NOT NULL,
    "CNPJ" int NOT NULL,
    CONSTRAINT "projetosPK" PRIMARY KEY ("idProjeto"),
    CONSTRAINT "empresaFK" FOREIGN KEY ("CNPJ")
        REFERENCES "empresa" ("CNPJ")
        ON DELETE SET NULL
        ON UPDATE CASCADE
)

CREATE TABLE "vagas"(
    "idVagas" serial,
    "nome" varchar(100) NOT NULL,
    "funcao" varchar(1000) NOT NULL,
    "salario" numeric(1000,2) NOT NULL,
    CONSTRAINT "vagaPK" PRIMARY KEY ("idVagas")
)

CREATE TABLE "patrocinador" (
    "idPatrocinador" serial,
    "nome" varchar(100) NOT NULL,
    "tipo" varchar(1000) NOT NULL,
    CONSTRAINT "patrocinadorPK" PRIMARY KEY ("idPatrocinador")
)

CREATE TABLE "etapa" (
    "idEtapa" serial,
    "tipo" varchar(100) NOT NULL,
    "dataInicio" date,
    "dataPrevisaoTermino" date,
    CONSTRAINT "etapaPK" PRIMARY KEY ("idEtapa")
)

CREATE TABLE "projetoPatrocinador" (
    "idProjeto" INTEGER,
    "idPatrocinador" int,
    "valorInvestimento" numeric(1000,2) NOT NULL,
    CONSTRAINT "projetoPatrocinadorPK" PRIMARY KEY ("idProjeto", "idPatrocinador"),
	  CONSTRAINT "projetoPatrocinadorFK" FOREIGN KEY ("idProjeto")
		REFERENCES "projetos" ("idProjeto")
        ON DELETE CASCADE
        ON UPDATE CASCADE,
	  CONSTRAINT "patrocinadorProFK" FOREIGN KEY ("idPatrocinador")
		REFERENCES "patrocinador" ("idPatrocinador")
        ON DELETE SET NULL
        ON UPDATE CASCADE
)

CREATE TABLE "projetoVaga" (
    "idProjeto" int,
    "idvagas" int,
    CONSTRAINT "projetoVagaPK" PRIMARY KEY ("idProjeto", "idvagas"),
	  CONSTRAINT "projetoVagaFK" FOREIGN KEY ("idProjeto")
		REFERENCES "projetos" ("idProjeto")
        ON DELETE CASCADE
        ON UPDATE CASCADE,
	CONSTRAINT "vagasProjetoFK" FOREIGN KEY ("idvagas")
		REFERENCES "vagas" ("idVagas")
        ON DELETE SET NULL
        ON UPDATE CASCADE
)

CREATE TABLE "projetoEtapa" (
    "idProjeto" int,
    "idEtapa" int,
    CONSTRAINT "projetoEtapaPK" PRIMARY KEY ("idProjeto", "idEtapa"),
	  CONSTRAINT "projetoetapaFK" FOREIGN KEY ("idProjeto")
		REFERENCES "projetos" ("idProjeto")
        ON DELETE CASCADE
        ON UPDATE CASCADE,
	CONSTRAINT "etapaProjetoFK" FOREIGN KEY ("idEtapa")
		REFERENCES "etapa" ("idEtapa")
        ON DELETE SET NULL
        ON UPDATE CASCADE
)
