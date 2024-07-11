### Tabelas e Colunas do Banco de Dados `u492577848_demutran`

#### Tabela **DAT1**

| Coluna                           | Tipo             | Pode ser Nulo | Chave | Padrão          | Extra            |
|----------------------------------|------------------|---------------|-------|------------------|------------------|
| relacao_com_veiculo               | varchar(255)     | NO            |       | NULL             |                  |
| estrangeiro                      | tinyint(1)       | YES           |       | NULL             |                  |
| tipo_documento                   | varchar(50)      | NO            |       | NULL             |                  |
| numero_documento                 | varchar(100)     | NO            |       | NULL             |                  |
| pais                             | varchar(100)     | NO            |       | NULL             |                  |
| nome                             | varchar(255)     | NO            |       | NULL             |                  |
| cpf                              | varchar(14)      | NO            |       | NULL             |                  |
| profissao                        | varchar(255)     | YES           |       | NULL             |                  |
| sexo                             | char(1)          | YES           |       | NULL             |                  |
| data_nascimento                  | date             | YES           |       | NULL             |                  |
| email                            | varchar(255)     | YES           |       | NULL             |                  |
| celular                          | varchar(20)      | YES           |       | NULL             |                  |
| cep                              | varchar(10)      | NO            |       | NULL             |                  |
| logradouro                       | varchar(255)     | NO            |       | NULL             |                  |
| numero                           | varchar(10)      | NO            |       | NULL             |                  |
| complemento                      | varchar(255)     | YES           |       | NULL             |                  |
| bairro_localidade                | varchar(255)     | NO            |       | NULL             |                  |
| cidade                           | varchar(255)     | NO            |       | NULL             |                  |
| uf                               | char(2)          | NO            |       | NULL             |                  |
| data                             | date             | NO            |       | NULL             |                  |
| horario                          | time             | NO            |       | NULL             |                  |
| cidade_acidente                  | varchar(255)     | YES           |       | 'Pau dos Ferros' |                  |
| uf_acidente                      | char(2)          | YES           |       | 'RN'             |                  |
| cep_acidente                     | varchar(10)      | YES           |       | NULL             |                  |
| logradouro_acidente              | varchar(255)     | YES           |       | NULL             |                  |
| numero_acidente                  | varchar(10)      | YES           |       | NULL             |                  |
| complemento_acidente             | varchar(255)     | YES           |       | NULL             |                  |
| bairro_localidade_acidente       | varchar(255)     | YES           |       | NULL             |                  |
| ponto_referencia_acidente        | varchar(255)     | YES           |       | NULL             |                  |
| condicoes_via                    | varchar(255)     | NO            |       | NULL             |                  |
| sinalizacao_horizontal_vertical  | varchar(255)     | NO            |       | NULL             |                  |
| tracado_via                      | varchar(255)     | NO            |       | NULL             |                  |
| condicoes_meteorologicas         | varchar(255)     | NO            |       | NULL             |                  |
| tipo_acidente                    | varchar(255)     | NO            |       | NULL             |                  |

#### Tabela **DAT2**

| Coluna                    | Tipo               | Pode ser Nulo | Chave | Padrão          | Extra            |
|---------------------------|--------------------|---------------|-------|------------------|------------------|
| id                        | bigint(20) unsigned| NO            | PRI   | NULL             | auto_increment   |
| driver_bairro             | varchar(100)       | YES           |       | NULL             |                  |
| driver_categoria_cnh      | varchar(20)        | YES           |       | NULL             |                  |
| driver_celular            | varchar(20)        | YES           |       | NULL             |                  |
| driver_cep                | varchar(20)        | YES           |       | NULL             |                  |
| driver_cidade             | varchar(100)       | YES           |       | NULL             |                  |
| driver_complemento        | varchar(100)       | YES           |       | NULL             |                  |
| driver_cpf                | varchar(20)        | YES           |       | NULL             |                  |
| driver_data_habilitacao   | date               | YES           |       | NULL             |                  |
| driver_email              | varchar(100)       | YES           |       | NULL             |                  |
| driver_logradouro         | varchar(100)       | YES           |       | NULL             |                  |
| driver_nascimento         | date               | YES           |       | NULL             |                  |
| driver_nome               | varchar(100)       | YES           |       | NULL             |                  |
| driver_numero_documento   | varchar(50)        | YES           |       | NULL             |                  |
| driver_numero_endereco    | varchar(20)        | YES           |       | NULL             |                  |
| driver_pais               | varchar(50)        | YES           |       | NULL             |                  |
| driver_registro           | varchar(50)        | YES           |       | NULL             |                  |
| driver_sexo               | varchar(10)        | YES           |       | NULL             |                  |
| driver_tipo_documento     | varchar(50)        | YES           |       | NULL             |                  |
| driver_uf_cnh             | varchar(2)         | YES           |       | NULL             |                  |
| driver_uf_endereco        | varchar(2)         | YES           |       | NULL             |                  |
| driver_validade_cnh       | date               | YES           |       | NULL             |                  |
| vehicle_chassi            | varchar(50)        | YES           |       | NULL             |                  |
| vehicle_ano_fabricacao    | varchar(4)         | YES           |       | NULL             |                  |
| vehicle_ano_modelo        | varchar(4)         | YES           |       | NULL             |                  |
| vehicle_carretinha        | tinyint(1)         | YES           |       | NULL             |                  |
| vehicle_categoria         | varchar(50)        | YES           |       | NULL             |                  |
| vehicle_cor               | varchar(50)        | YES           |       | NULL             |                  |
| vehicle_manobra           | tinyint(1)         | YES           |       | NULL             |                  |
| vehicle_marca_modelo      | varchar(100)       | YES           |       | NULL             |                  |
| vehicle_placa             | varchar(10)        | YES           |       | NULL             |                  |
| vehicle_renavam           | varchar(20)        | YES           |       | NULL             |                  |
| vehicle_segurado          | tinyint(1)         | YES           |       | NULL             |                  |
| vehicle_seguradora        | varchar(100)       | YES           |       | NULL             |                  |
| vehicle_situacao          | varchar(50)        | YES           |       | NULL             |                  |
| vehicle_tipo_veiculo      | varchar(50)        | YES           |       | NULL             |                  |
| vehicle_uf                | varchar(2)         | YES           |       | NULL             |                  |
| selected_parts            | text               | YES           |       | NULL             |                  |

#### Tabela **Formularios_DAT3**

| Coluna         | Tipo      | Pode ser Nulo | Chave | Padrão | Extra            |
|----------------|-----------|---------------|-------|--------|------------------|
| id             | int(11)   | NO            | PRI   | NULL   | auto_increment   |
| data           | datetime  | NO            |       | NULL   |                  |
| nome_usuario   | varchar(255) | NO         |       | NULL   |                  |

#### Tabela **sac**

| Coluna     | Tipo             | Pode ser Nulo | Chave | Padrão | Extra            |
|------------|------------------|---------------|-------|--------|------------------|
| id         | bigint(20) unsigned | NO         | PRI   | NULL   | auto_increment   |
| nome       | varchar(100)     | NO            |       | NULL   |                  |
| telefone   | varchar(20)      | NO            |       | NULL   |                  |
| email      | varchar(100)     | NO            |       | NULL   |                  |
| assunto    | varchar(100)     | NO            |       | NULL   |                  |
| mensagem   | text             | YES           |       | NULL   |                  |

#### Tabela **solicitacao_cartao**

| Coluna                         | Tipo             | Pode ser Nulo | Chave | Padrão | Extra            |
|--------------------------------|------------------|---------------|-------

|--------|------------------|
| id                             | bigint(20) unsigned | NO         | PRI   | NULL   | auto_increment   |
| residente                      | tinyint(1)       | NO            |       | NULL   |                  |
| tipo_solicitacao               | varchar(50)      | NO            |       | NULL   |                  |
| emissao_cartao                 | varchar(50)      | YES           |       | NULL   |                  |
| solicitante                    | varchar(50)      | YES           |       | NULL   |                  |
| nome                           | varchar(100)     | NO            |       | NULL   |                  |
| data_nascimento                | date             | YES           |       | NULL   |                  |
| cpf                            | varchar(20)      | YES           |       | NULL   |                  |
| endereco                       | varchar(200)     | YES           |       | NULL   |                  |
| telefone                       | varchar(20)      | YES           |       | NULL   |                  |
| doc_identidade_num             | varchar(50)      | YES           |       | NULL   |                  |
| email                          | varchar(100)     | YES           |       | NULL   |                  |
| doc_identidade_url             | varchar(255)     | YES           |       | NULL   |                  |
| comprovante_residencia_url     | varchar(255)     | YES           |       | NULL   |                  |
| laudo_medico_url               | varchar(255)     | YES           |       | NULL   |                  |
| representante_legal            | tinyint(1)       | YES           |       | NULL   |                  |
| nome_representante             | varchar(100)     | YES           |       | NULL   |                  |
| cpf_representante              | varchar(20)      | YES           |       | NULL   |                  |
| endereco_representante         | varchar(200)     | YES           |       | NULL   |                  |
| telefone_representante         | varchar(20)      | YES           |       | NULL   |                  |
| email_representante            | varchar(100)     | YES           |       | NULL   |                  |
| doc_identidade_representante_url | varchar(255)   | YES           |       | NULL   |                  |
| proc_comprovante_url           | varchar(255)     | YES           |       | NULL   |                  |

#### Tabela **solicitacao_demutran**

| Coluna                    | Tipo             | Pode ser Nulo | Chave | Padrão | Extra            |
|---------------------------|------------------|---------------|-------|--------|------------------|
| tipo_solicitacao          | varchar(255)     | NO            |       | NULL   |                  |
| nome                      | varchar(255)     | NO            |       | NULL   |                  |
| telefone                  | varchar(20)      | NO            |       | NULL   |                  |
| email                     | varchar(255)     | YES           |       | NULL   |                  |
| assunto                   | varchar(255)     | YES           |       | NULL   |                  |
| descricao                 | text             | YES           |       | NULL   |                  |
| doc_requerimento_url      | varchar(255)     | YES           |       | NULL   |                  |
| cnh_url                   | varchar(255)     | YES           |       | NULL   |                  |
| cnh_condutor_url          | varchar(255)     | YES           |       | NULL   |                  |
| notif_demutran_url        | varchar(255)     | YES           |       | NULL   |                  |
| crlv_url                  | varchar(255)     | YES           |       | NULL   |                  |
| comprovante_residencia_url| varchar(255)     | YES           |       | NULL   |                  |
| doc_complementares_urls   | text             | YES           |       | NULL   |                  |

#### Tabela **Veiculos_DAT3**

| Coluna                     | Tipo             | Pode ser Nulo | Chave | Padrão | Extra            |
|----------------------------|------------------|---------------|-------|--------|------------------|
| id                         | int(11)          | NO            | PRI   | NULL   | auto_increment   |
| formulario_id              | int(11)          | YES           | MUL   | NULL   |                  |
| tipo_veiculo               | varchar(255)     | YES           |       | NULL   |                  |
| placa                      | varchar(20)      | YES           |       | NULL   |                  |
| danos_sistema_seguranca    | tinyint(1)       | YES           |       | NULL   |                  |
| danos_carga                | tinyint(1)       | YES           |       | NULL   |                  |
| notas_fiscais              | text             | YES           |       | NULL   |                  |
| tipo_mercadoria            | varchar(255)     | YES           |       | NULL   |                  |
| valor_total                | decimal(10,2)    | YES           |       | NULL   |                  |
| extensao_danos             | text             | YES           |       | NULL   |                  |
| seguro                     | tinyint(1)       | YES           |       | NULL   |                  |
| seguradora                 | varchar(255)     | YES           |       | NULL   |                  |

