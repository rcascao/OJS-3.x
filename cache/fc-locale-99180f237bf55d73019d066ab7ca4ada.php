<?php return array (
  'plugins.generic.sword.displayName' => 'Plugin SWORD',
  'plugins.generic.sword.description' => 'Permite aos Editores de Revistas e (opcionalmente) Autores depositar artigos via protocolo SWORD',
  'plugins.generic.sword.enabled' => 'O plugin SWORD foi activado',
  'plugins.generic.sword.settings' => 'Configurações',
  'plugins.generic.sword.settings.allowAuthorSpecify' => 'Permitir ao autor especificar um ponto de depósito',
  'plugins.generic.sword.settings.depositPoints' => 'Pontos de Depósito',
  'plugins.generic.sword.depositPoints.create' => 'Criar Ponto de Depósito',
  'plugins.generic.sword.depositPoints.edit' => 'Editar Ponto de Depósito',
  'plugins.generic.sword.depositPoints.type.automatic' => 'Automático',
  'plugins.generic.sword.depositPoints.type.optionalSelection' => 'Opcional; Flexivel',
  'plugins.generic.sword.depositPoints.type.optionalFixed' => 'Opcional; Fixo',
  'plugins.generic.sword.depositPoints.type.manager' => 'Somente Editor-Gestor',
  'plugins.generic.sword.depositPoints.type.description' => '<h4>Tipos de Pontos de Depósito:</h4>
<p><strong>Automatic</strong>: O depósito ocorrer automaticamente. O ponto de depósito SWORD é especificado. Tem de ser indicado um nome de utilizador e senha. O depósito ocorre após notificação do autor sobre a aceitação.<br />
<strong>Opcional; Flexível</strong>: O autor pode escolher se pretende depositar ou não. O URL especificado indica um serviço documental, e o autor pode escolher choose qual o ponto específico do depósito a ser usado do documento. O depósito ocorre após notificação do autor sobre a aceitação.<br />
<strong>Opcional; Fixo</strong>: O autor pode escolher se pretende depositar ou não. O URL indica o específico ponto de depósito SWORD. O depósito ocorre após notificação do autor sobre a aceitação.<br />
<strong>Somente Editor-Gestor</strong>: Apenas o Editor-Gestor pode usar este ponto de depósito. O URL indica um serviço documental. O depósito é manualmente operado pelo Editor-Gestor usando a interface Importar/Exportar da Administração da Revista.
</p>',
  'plugins.generic.sword.depositPoints.password.description' => 'Se não especificar uma senha aqui, você e/ou o autor serão interpelados novamente quando ocorrer o depósito. Note que esta senha será vísivel a todos os Editores-Gestor e será armazenada sem qualquer encripetação na base de dados.',
  'plugins.generic.sword.depositPoints.name' => 'Nome',
  'plugins.generic.sword.automaticDepositComplete' => 'O item "{$itemTitle}" foi automaticamente depositado no repositório "{$repositoryName}".',
  'plugins.generic.sword.depositComplete' => 'O item "{$itemTitle}" foi depositado no repositório "{$repositoryName}".',
  'plugins.generic.sword.authorDepositDescription' => '<p>Por opção pode usar o seguinte formulário para depositar a sua submissão, "{$submissionTitle}", num dos repositórios listado. Use as checkboxes em baixo na coluna à esquerda em ordem a seleccionar para qual dos repositórios pretende depositar a sua submissão; cada repositório permite também especificar um ponto de depósito point a partir de uma lista descendente.</p>',
  'plugins.generic.sword.authorCustomDepositDescription' => '<p>Por opção pode especificar um ponto de depósito SWORD-compliant no seguinte formulário. Se assim o desejar, indique um URL SWORD, nome de utilizador e senha para o seu repositório e a submissão será depositada.</p>',
  'plugins.importexport.sword.displayName' => 'Importar/Exportar Plugin Depósito SWORD',
  'plugins.importexport.sword.description' => 'Artigos do depósito nos repositórios remotos usando o protocolo de depósito SWORD',
  'plugins.importexport.sword.deposit' => 'Depósito',
  'plugins.importexport.sword.serviceDocUrl' => 'URL Serviço Documental',
  'plugins.importexport.sword.depositUrl' => 'URL Ponto Depósito',
  'plugins.importexport.sword.depositPoint' => 'Ponto Depósito',
  'plugins.importexport.sword.depositPoint.addRemove' => 'Adicionar/Remover',
  'plugins.importexport.sword.depositGalleys' => 'Galerias dos Depósitos',
  'plugins.importexport.sword.depositEditorial' => 'Depositar o Ficheiro Editorial mais Recente',
  'plugins.importexport.sword.depositSuccessful' => 'Depósito com Sucesso',
  'plugins.importexport.sword.depositSuccessfulDescription' => 'O(s) item(s) seleccionados foram depositados.',
  'plugins.importexport.sword.depositFailed' => 'Depósito Falhou',
  'plugins.generic.sword.descriptionUnsupported' => 'Permitir Directores de Revista e (opcionalmente) Autores depositar artigos através do protocolo SWORD. Note-se que este plugin requer a extensão Zip, que actualmente não está instalado no sistema.',
); ?>