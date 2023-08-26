create table users(
    id_users SERIAL primary key  not null,
    name VARCHAR(100) not null,
        lastname_paternal VARCHAR(100) not null,
        lastname_mother VARCHAR(100) not null,
        curp VARCHAR(20) not null,
        fecha_de_nacimiento date not null,
        sexo varchar(13) not null,
        calle VARCHAR(100) not null,
        numero_exterior INT not null,
        email VARCHAR(100) not null,
        correo_adicional VARCHAR(100) not null,
        telefono_personal VARCHAR(10) not null,
        telefono_emergencia VARCHAR(10) not null,
        telefono_recado VARCHAR(10) not null,
        paciente boolean,
        asesor_salud boolean,
        administrador boolean,
        password varchar
);

CREATE TABLE formula_roja(
    id_formula_roja SERIAL PRIMARY KEY  NOT NULL,
    Eritrocitos VARCHAR(50) NOT NULL,
    Hemoglobina VARCHAR(50) NOT NULL,
    Hematocrito VARCHAR(50) NOT NULL,
    Volumen_globular_medio VARCHAR(50) NOT NULL,
    Concentracion_media_de_HB VARCHAR(50) NOT NULL,
    Conc_media_de_HB_corpuscular VARCHAR(50) NOT NULL,
    Indice_de_distribucion_de_eritrocitos_RDW VARCHAR(50) NOT NULL
    );

CREATE TABLE serie_plaquetaria(
    id_serie_plaquetaria SERIAL PRIMARY KEY  NOT NULL,
    Plaquetas VARCHAR(50) NOT NULL,
    Volumen_plaquetario_pedio VARCHAR(50) NOT NULL
    );
CREATE TABLE formula_blanca(
    id_formula_blanca SERIAL PRIMARY KEY  NOT NULL,
    Leucocitos_totales VARCHAR(50) NOT NULL,
    Neutrofilos_totales VARCHAR(50) NOT NULL,
    Neutrofilos_segmentados VARCHAR(50) NOT NULL,
    Neutrofilos_en_banda VARCHAR(50)NOT NULL,
    Metamielocitos VARCHAR(50) NOT NULL,
    Mielocitos VARCHAR(50) NOT NULL,
    Promuelocitos VARCHAR(50) NOT NULL,
    Blastos VARCHAR(50) NOT NULL,
    Eosinofilos VARCHAR(50) NOT NULL,
    Basofilos VARCHAR(50) NOT NULL,
    Monocitos VARCHAR(50) NOT NULL,
    Linfocitos VARCHAR(50) NOT NULL
    );


create table biometria_hematica_completa(
id_biometria_hematica_completa SERIAL primary key  not null,
fecha_estudio DATE NOT NULL,
folio VARCHAR(20) NOT NULL,
hora TIME NOT NULL,
formula_roja_id int,
serie_plaquetaria_id int,
formula_blanca_id int,
FOREIGN KEY(formula_roja_id)REFERENCES formula_roja(id_formula_roja),
FOREIGN KEY(serie_plaquetaria_id)REFERENCES serie_plaquetaria(id_serie_plaquetaria),
FOREIGN KEY(formula_blanca_id)REFERENCES formula_blanca(id_formula_blanca)
);


CREATE TABLE quimica_sanguinea_de_50_elementos(
    id_quimica_sanguinea_de_50_elementos SERIAL PRIMARY KEY  NOT NULL,
    Color VARCHAR(30) NOT NULL,
    Aspecto VARCHAR(30) NOT NULL,
    Hemolisis VARCHAR(30) NOT NULL,
    Lipemia VARCHAR(30) NOT NULL,
    Ictericia VARCHAR(30) NOT NULL,
    Glucosa VARCHAR(30) NOT NULL,
    BUN_UREICO VARCHAR(30) NOT NULL,
    Urea_serica VARCHAR(30) NOT NULL,
    Creatinina_serica VARCHAR(30) NOT NULL,
    Relacion_BUN_CREATININA VARCHAR(30) NOT NULL,
    Acido_urico_serico VARCHAR(30) NOT NULL,
    Colesterol_total VARCHAR(30) NOT NULL,
    Trigliceridos VARCHAR(30) NOT NULL,
    Colesterol_de_alta_densidad_HDL VARCHAR(30) NOT NULL,
    Colesterol_de_baja_densidad_LDL VARCHAR(30) NOT NULL,
    Colesterol_de_muy_baja_densidad_VLDL VARCHAR(30) NOT NULL,
    Indice_aterogenico_I_LDL_HDL VARCHAR(30) NOT NULL,
    Indice_aterogenico_II_COL_HDL VARCHAR(30) NOT NULL,
    Indice_aterogenico_III_LDL_TG VARCHAR(30) NOT NULL,
    Indice_aterogenico_III_COL_TG VARCHAR(30) NOT NULL,
    Lipidos_totales VARCHAR(30) NOT NULL,
    Bilirrubina_total VARCHAR(30) NOT NULL,
    Bilirrubina_conjugada_directa VARCHAR(30) NOT NULL,
    Bilirrubina_no_conjugada_indirecta VARCHAR(30) NOT NULL,
    Transaminasa_glutamico_oxalacetica_AST VARCHAR(30) NOT NULL,
    Transaminasa_glutamico_piruvica_ALTV VARCHAR(30) NOT NULL,
    Gamma_glutamil_transferasa VARCHAR(30) NOT NULL,
    Fosfatasa_alcalina VARCHAR(30) NOT NULL,
    Fosfatasa_acida_total VARCHAR(30) NOT NULL,
    Proteinas_totales VARCHAR(30) NOT NULL,
    Albumina_serica VARCHAR(30) NOT NULL,
    Globulinas_sericas VARCHAR(30) NOT NULL,
    Relacion_albumina_globulina VARCHAR(30) NOT NULL,
    Amilasa_serica VARCHAR(30) NOT NULL,
    Lipasa_serica VARCHAR(30) NOT NULL,
    deshidrogenasa_lactica_DHL VARCHAR(30) NOT NULL,
    calcio_serico VARCHAR(30) NOT NULL,
    fosforo_serico VARCHAR(30) NOT NULL,
    magnesio VARCHAR(30) NOT NULL,
    sodio_serico VARCHAR(30) NOT NULL,
    potasio_serico VARCHAR(30) NOT NULL,
    cloro_serico VARCHAR(30) NOT NULL,
    creatinfosfoquinasa_CK_TOTAL VARCHAR(30) NOT NULL,
    creatinfosfoquinasa_fraccion_CK_MB VARCHAR(30) NOT NULL,
    TICB_fijacion_de_hierro VARCHAR(30) NOT NULL,
    hierro_serico VARCHAR(30) NOT NULL,
    litio_serico VARCHAR(30) NOT NULL,
    dioxido_de_carbono VARCHAR(30) NOT NULL,
    alcohol_en_sangre VARCHAR(30) NOT NULL,
    factor_reumatoide_cuantitativo VARCHAR(30) NOT NULL,
    proteina_c_reactiva_cuantitativa VARCHAR(30) NOT NULL
);

create table promo_quimica_sanguinea_de_50_elementos(
id_promo_quimica_sanguinea_de_50_elementos SERIAL PRIMARY KEY  NOT NULL,
fecha_estudio DATE NOT NULL,
folio VARCHAR(20) NOT NULL,
hora TIME NOT NULL,
quimica_sanguinea_de_50_elementos_id int,
FOREIGN KEY(quimica_sanguinea_de_50_elementos_id)REFERENCES quimica_sanguinea_de_50_elementos(id_quimica_sanguinea_de_50_elementos)
);


CREATE TABLE examen_macroscopico(
    id_examen_macroscopico SERIAL PRIMARY KEY  NOT NULL,
    color VARCHAR(30) NOT NULL,
    aspecto VARCHAR(30) NOT NULL
);

CREATE TABLE analisis_fisico_quimico(
    id_analisis_fisico_quimico SERIAL PRIMARY KEY  NOT NULL,
    densidad VARCHAR(30) NOT NULL,
    ph VARCHAR(30) NOT NULL,
    glucosa VARCHAR(30) NOT NULL,
    proteinas VARCHAR(30) NOT NULL,
    sangre VARCHAR(30) NOT NULL,
    hemoglobina VARCHAR(30) NOT NULL,
    c_cetonicos VARCHAR(30) NOT NULL,
    bilirrubina VARCHAR(30) NOT NULL,
    urobilinogeno VARCHAR(30) NOT NULL,
    nitritos VARCHAR(30) NOT NULL
);

CREATE TABLE analisis_microscopico_de_sedimento(
    id_analisis_microscopico_de_sedimento SERIAL PRIMARY KEY  NOT NULL,
    celulas_epiteliales VARCHAR(30) NOT NULL,
    leucocitos VARCHAR(30) NOT NULL,
    bacterias VARCHAR(30) NOT NULL,
    filamentos_de_mucina VARCHAR(30) NOT NULL,
    cristales_de_oxalato_de_calcio VARCHAR(30) NOT NULL,
    antigeno_especifico_de_prostata_PSA VARCHAR(30) NOT NULL
    );

CREATE TABLE examen_general_de_orina(
id_examen_general_de_orina SERIAL PRIMARY KEY  NOT NULL,
fecha_estudio DATE NOT NULL,
folio VARCHAR(20) NOT NULL,
hora TIME NOT NULL,
examen_macroscopico_id int,
analisis_fisico_quimico_id int,
analisis_microscopico_de_sedimento_id int,
FOREIGN KEY(examen_macroscopico_id)REFERENCES examen_macroscopico(id_examen_macroscopico),
FOREIGN KEY(analisis_fisico_quimico_id)REFERENCES analisis_fisico_quimico(id_analisis_fisico_quimico),
FOREIGN KEY(analisis_microscopico_de_sedimento_id)REFERENCES analisis_microscopico_de_sedimento(id_analisis_microscopico_de_sedimento)
);

CREATE TABLE coproparasitoscopico_de_3_muestras(
id_coproparasitoscopico_de_3_muestras SERIAL PRIMARY KEY  NOT NULL,
coproparasitoscopico_1_muestras varchar(20) not null,
coproparasitoscopico_2_muestras varchar(20) not null,
coproparasitoscopico_3_muestras varchar(20) not null
);

CREATE TABLE coproparasitoscopico_3_muestras(
id_coproparasitoscopico_3_muestras SERIAL primary key  not null,
fecha_estudio DATE NOT NULL,
folio VARCHAR(20) NOT NULL,
hora TIME NOT NULL,
coproparasitoscopico_de_3_muestras_id int,
FOREIGN KEY(coproparasitoscopico_de_3_muestras_id)REFERENCES coproparasitoscopico_de_3_muestras(id_coproparasitoscopico_de_3_muestras)
);


create table estudios(
id_estudios SERIAL PRIMARY KEY  NOT NULL,
biometria_hematica_completa_id int,
promo_quimica_sanguinea_de_50_elementos_id int,
examen_general_de_orina_id int,
coproparasitoscopico_3_muestras_id int,
FOREIGN KEY(biometria_hematica_completa_id)REFERENCES biometria_hematica_completa(id_biometria_hematica_completa),
FOREIGN KEY(promo_quimica_sanguinea_de_50_elementos_id)REFERENCES promo_quimica_sanguinea_de_50_elementos(id_promo_quimica_sanguinea_de_50_elementos),
FOREIGN KEY(examen_general_de_orina_id)REFERENCES examen_general_de_orina(id_examen_general_de_orina),
FOREIGN KEY(coproparasitoscopico_3_muestras_id)REFERENCES coproparasitoscopico_3_muestras(id_coproparasitoscopico_3_muestras)
);

create table usuario_estudio(
id_usuario_estudio SERIAL NOT NULL,
users_id int,
biometria_hematica_completa_id int,
promo_quimica_sanguinea_de_50_elementos_id int,
examen_general_de_orina_id int,
coproparasitoscopico_3_muestras_id int,
FOREIGN KEY(users_id)REFERENCES users(id_users),
FOREIGN KEY(biometria_hematica_completa_id)REFERENCES biometria_hematica_completa(id_biometria_hematica_completa),
FOREIGN KEY(promo_quimica_sanguinea_de_50_elementos_id)REFERENCES promo_quimica_sanguinea_de_50_elementos(id_promo_quimica_sanguinea_de_50_elementos),
FOREIGN KEY(examen_general_de_orina_id)REFERENCES examen_general_de_orina(id_examen_general_de_orina),
FOREIGN KEY(coproparasitoscopico_3_muestras_id)REFERENCES coproparasitoscopico_3_muestras(id_coproparasitoscopico_3_muestras)
);
