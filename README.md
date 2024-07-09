

---

Tabela                      | Coluna                          | Tipo                 | Pode ser Nulo | Chave | Padrão                | Extra
----------------------------|---------------------------------|----------------------|---------------|-------|-----------------------|------
DAT1                        | relacao_com_veiculo             | varchar(255)         | NO            |       | NULL                  | 
DAT1                        | estrangeiro                     | tinyint(1)           | YES           |       | NULL                  | 
DAT1                        | tipo_documento                  | varchar(50)          | NO            |       | NULL                  | 
DAT1                        | numero_documento                | varchar(100)         | NO            |       | NULL                  | 
DAT1                        | pais                            | varchar(100)         | NO            |       | NULL                  | 
DAT1                        | nome                            | varchar(255)         | NO            |       | NULL                  | 
DAT1                        | cpf                             | varchar(14)          | NO            |       | NULL                  | 
DAT1                        | profissao                       | varchar(255)         | YES           |       | NULL                  | 
DAT1                        | sexo                            | char(1)              | YES           |       | NULL                  | 
DAT1                        | data_nascimento                 | date                 | YES           |       | NULL                  | 
DAT1                        | email                           | varchar(255)         | YES           |       | NULL                  | 
DAT1                        | celular                         | varchar(20)          | YES           |       | NULL                  | 
DAT1                        | cep                             | varchar(10)          | NO            |       | NULL                  | 
DAT1                        | logradouro                      | varchar(255)         | NO            |       | NULL                  | 
DAT1                        | numero                          | varchar(10)          | NO            |       | NULL                  | 
DAT1                        | complemento                     | varchar(255)         | YES           |       | NULL                  | 
DAT1                        | bairro_localidade               | varchar(255)         | NO            |       | NULL                  | 
DAT1                        | cidade                          | varchar(255)         | NO            |       | NULL                  | 
DAT1                        | uf                              | char(2)              | NO            |       | NULL                  | 
DAT1                        | data                            | date                 | NO            |       | NULL                  | 
DAT1                        | horario                         | time                 | NO            |       | NULL                  | 
DAT1                        | cidade_acidente                 | varchar(255)         | YES           | 'Pau dos Ferros'       | 
DAT1                        | uf_acidente                     | char(2)              | YES           | 'RN'                   | 
DAT1                        | cep_acidente                    | varchar(10)          | YES           | NULL                  | 
DAT1                        | logradouro_acidente             | varchar(255)         | YES           | NULL                  | 
DAT1                        | numero_acidente                 | varchar(10)          | YES           | NULL                  | 
DAT1                        | complemento_acidente            | varchar(255)         | YES           | NULL                  | 
DAT1                        | bairro_localidade_acidente      | varchar(255)         | YES           | NULL                  | 
DAT1                        | ponto_referencia_acidente       | varchar(255)         | YES           | NULL                  | 
DAT1                        | condicoes_via                   | varchar(255)         | NO            | NULL                  | 
DAT1                        | sinalizacao_horizontal_vertical | varchar(255)         | NO            | NULL                  | 
DAT1                        | tracado_via                     | varchar(255)         | NO            | NULL                  | 
DAT1                        | condicoes_meteorologicas        | varchar(255)         | NO            | NULL                  | 
DAT1                        | tipo_acidente                   | varchar(255)         | NO            | NULL                  | 
DAT2                        | id                              | bigint(20) unsigned  | NO            | PRI   | NULL                  | auto_increment
DAT2                        | driver_bairro                   | varchar(100)         | YES           |       | NULL                  | 
DAT2                        | driver_categoria_cnh            | varchar(20)          | YES           |       | NULL                  | 
DAT2                        | driver_celular                  | varchar(20)          | YES           |       | NULL                  | 
DAT2                        | driver_cep                      | varchar(20)          | YES           |       | NULL                  | 
DAT2                        | driver_cidade                   | varchar(100)         | YES           |       | NULL                  | 
DAT2                        | driver_complemento              | varchar(100)         | YES           |       | NULL                  | 
DAT2                        | driver_cpf                      | varchar(20)          | YES           |       | NULL                  | 
DAT2                        | driver_data_habilitacao         | date                 | YES           |       | NULL                  | 
DAT2                        | driver_email                    | varchar(100)         | YES           |       | NULL                  | 
DAT2                        | driver_logradouro               | varchar(100)         | YES           |       | NULL                  | 
DAT2                        | driver_nascimento               | date                 | YES           |       | NULL                  | 
DAT2                        | driver_nome                     | varchar(100)         | YES           |       | NULL                  | 
DAT2                        | driver_numero_documento         | varchar(50)          | YES           |       | NULL                  | 
DAT2                        | driver_numero_endereco          | varchar(20)          | YES           |       | NULL                  | 
DAT2                        | driver_pais                     | varchar(50)          | YES           |       | NULL                  | 
DAT2                        | driver_registro                 | varchar(50)          | YES           |       | NULL                  | 
DAT2                        | driver_sexo                     | varchar(10)          | YES           |       | NULL                  | 
DAT2                        | driver_tipo_documento           | varchar(50)          | YES           |       | NULL                  | 
DAT2                        | driver_uf_cnh                   | varchar(2)           | YES           |       | NULL                  | 
DAT2                        | driver_uf_endereco              | varchar(2)           | YES           |       | NULL                  | 
DAT2                        | driver_validade_cnh             | date                 | YES           |       | NULL                  | 
DAT2                        | vehicle_chassi                  | varchar(50)          | YES           |       | NULL                  | 
DAT2                        | vehicle_ano_fabricacao          | varchar(4)           | YES           |       | NULL                  | 
DAT2                        | vehicle_ano_modelo              | varchar(4)           | YES           |       | NULL                  | 
DAT2                        | vehicle_carretinha              | tinyint(1)           | YES           |       | NULL                  | 
DAT2                        | vehicle_categoria               | varchar(50)          | YES           |       | NULL                  | 
DAT2                        | vehicle_cor                     | varchar(50)          | YES           |       | NULL                  | 
DAT2                        | vehicle_manobra                 | tinyint(1)           | YES           |       | NULL                  | 
DAT2                        | vehicle_marca_modelo            | varchar(100)         | YES           |       | NULL                  | 
DAT2                        | vehicle_placa                   | varchar(10)          | YES           |       | NULL                  | 
DAT2                        | vehicle_renavam                 | varchar(20)          | YES           |       | NULL                  | 
DAT2                        | vehicle_segurado                | tinyint(1)           | YES           |       | NULL                  | 
DAT2                        | vehicle_seguradora              | varchar(100)         | YES           |       | NULL                  | 
DAT2                        | vehicle_situacao                | varchar(50)          | YES           |       | NULL                  | 
DAT2                        | vehicle_tipo_veiculo            | varchar(50)          | YES           |       | NULL                  | 
DAT2                        | vehicle_uf                      | varchar(2)           | YES           |       | NULL                  | 
DAT2                        | selected_parts                  | text                 | YES           |       | NULL                  | 
Formularios_DAT3            | id                              | int(11)              | NO            | PRI   | NULL                  | auto_increment
Formularios_DAT3            | data                            | datetime             | NO            |       | NULL                  | 
Formularios_DAT3            | nome_usuario                    | varchar(255)         | NO            |       | NULL                  | 
sac                         | id                              | bigint(20) unsigned  | NO            | PRI   | NULL                  | auto_increment
sac                         | nome                            | varchar(100)         | NO            |       | NULL                  | 
sac                         | telefone                        | varchar(20)          | NO            |       | NULL                  | 
sac                         | email                           | varchar(100)         | NO            |       | NULL                  | 
sac                         | assunto                         | varchar(100)         | NO            |       | NULL                  | 
sac                         | mensagem                        | text                 | YES           |       | NULL                  | 
solicitacao_cartao          | id                              | bigint(20) unsigned  | NO            | PRI   | NULL                  | auto_increment
solicitacao_cartao          | residente                       | tinyint(1)           | NO            |       | NULL                  | 
solicitacao_cartao          | tipo_solicitacao                | varchar(50)          | NO            |       | NULL                  | 
solicitacao_cartao          | emissao_cartao                  | varchar(50)          | NO            |       | NULL                  | 
solicitacao_cartao          | solicitante                     | varchar(50)          | NO            |       | NULL                  | 
solicitacao_cartao          | nome                            | varchar(100)         | NO            |       | NULL                  | 
solicitacao_cartao          | data_nascimento                 | date                 | NO            |       | NULL                  | 
solicitacao_cartao          | cpf                             | varchar(20)          | NO            |       | NULL                  | 
solicitacao_cartao          | endereco                        | varchar(200)         | NO            |       | NULL                  | 
solicitacao_cartao          | telefone                        | varchar(20)          | NO            |       | NULL                  | 
solicitacao_cartao          | doc_identidade_num              | varchar(50)          | NO            |       | NULL                  | 
solicitacao_cartao          | email                           | varchar(100)         | NO            |       | NULL                  | 
solicitacao_cartao          | doc_identidade_url              | varchar(255)         | YES           |       | NULL                  | 
solicitacao_cartao          | comprovante_residencia_url      | varchar(255)         | YES           |       | NULL                  | 
solicitacao_cartao          | laudo_medico_url                | varchar(255)         | YES           |       | NULL                  | 
solicitacao_cartao          | representante_legal             | tinyint(1)           | NO            | 0     | NULL                  | 
solicitacao_cartao          | nome_representante              | varchar(100)         | YES           |       | NULL                  | 
solicitacao_cartao          | cpf_representante               | varchar(20)          | YES           |       | NULL                  | 
solicitacao_cartao          | endereco_representante          | varchar(200)         | YES           |       | NULL                  | 
solicitacao_cartao          | telefone_representante          | varchar(20)          | YES           |       | NULL                  | 
solicitacao_cartao          | email_representante             | varchar(100)         | YES           |       | NULL                  | 
solicitacao_cartao          | doc_identidade_representante_url| varchar(255)         | YES           |       | NULL                  | 
solicitacao_cartao          | proc_comprovante_url            | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | tipo_solicitacao                | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | nome                            | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | telefone                        | varchar(20)          | YES           |       | NULL                  | 
solicitacao_demutran        | email                           | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | assunto                         | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | descricao                       | text                 | YES           |       | NULL                  | 
solicitacao_demutran        | doc_requerimento_url            | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | cnh_url                         | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | cnh_condutor_url                | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | notif_demutran_url              | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | crlv_url                        | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | comprovante_residencia_url      | varchar(255)         | YES           |       | NULL                  | 
solicitacao_demutran        | doc_complementares_urls         | text                 | YES           |       | NULL                  | 
Veiculos_DAT3               | id                              | int(11)              | NO            | PRI   | NULL                  | auto_increment
Veiculos_DAT3               | formulario_id                   | int(11)              | NO            | MUL   | NULL                  | 
Veiculos_DAT3               | tipo_veiculo                    | varchar(255)         | NO            |       | NULL                  | 
Veiculos_DAT3               | placa                           | varchar(20)          | NO            |       | NULL                  | 
Veiculos_DAT3               | danos_sistema_seguranca         | tinyint(1)           | NO            | 0     | NULL                  | 
Veiculos_DAT3               | danos_carga                     | tinyint(1)           | NO            | 0     | NULL                  | 
Veiculos_DAT3               | notas_fiscais                   | text                 | YES           |       | NULL                  | 
Veiculos_DAT3               | tipo_mercadoria                 | varchar(255)         | YES           |       | NULL                  | 
Veiculos_DAT3               | valor_total                     | decimal(10,2)        | YES           |       | NULL                  | 
Veiculos_DAT3               | extensao_danos                  | text                 | YES           |       | NULL                  | 
Veiculos_DAT3               | seguro                          | tinyint(1)           | NO            | 0     | NULL                  | 
Veiculos_DAT3               | seguradora                      | varchar(255)         | YES           |       | NULL                  | 
