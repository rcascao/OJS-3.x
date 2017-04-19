<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'site/topic/000002',
        'locale' => 'pt_PT',
        'title' => 'Administração do Portal',
        'toc' => 'site/toc/000000',
        'key' => 'site.siteManagement',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>O sistema foi desenvolvido para administrar várias revistas, sendo o Administrador do Sistema o responsável pelas configurações ao nível do portal e criação de novas revistas a serem hospedados no sistema. Cada revista é independente, com a excepção dos registos de utilizadores: enquanto um utilizador pode assumir várias funções em várias revistas, o utilizador utilizará o mesmo endereço de e-mail e login independentemente da revista.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Configurações do Portal',
      ),
      'value' => '<p>Informações básicas são registadas pelo Administrador do Sistema, aplicáveis a todas as revistas hospedadas no portal, incluindo o Título e a Descrição do portal, além das informações para contacto.</p>
		<p><em>Redireccionamento da Revista.</em> Esta opção pode ser usada para garantir o redireccionamento do portal para uma revista específica. Tipicamente esta opção é utilizada para hospedar uma única revista no sistema.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Revistas Hospedadas',
      ),
      'value' => '<p>Como o sistema permite gerar qualquer número individual e distinto de revistas, podem ser criadas novas revistas em qualquer momento. Cada revista criada pode ser acedida através de um URL única baseado no caminho definido pelo Administrador do Sistema. Revistas em processo de configuração podem permanecer indisponíveis ao público até estarem prontas para publicação.</p>',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Idiomas',
      ),
      'value' => '<p>O sistema foi desenvolvido como um sistema multilingue, permitindo que revistas que trabalhem com conteúdo multilingue sejam hospedadas num único sistema. O Administrador do Sistema pode especificar o idioma padrão para o sistema e instalar novas traduções para uso nas revistas.</p>
		<p>Pacotes adicionais de idiomas estarão normalmente disponíveis no <a href="http://pkp.sfu.ca/" target="_blank">portal web</a> do sistema assim que as contribuições da comunidade forem recebidas. Estes pacotes podem ser instalados num sistema existente para disponibilização às revistas.</p>',
    ),
    4 => 
    array (
      'attributes' => 
      array (
        'title' => 'Fontes de Autenticação',
      ),
      'value' => '<p>O sistema normalmente autentica utilizadores através da sua base de dados interna. No entanto, é possível utilizar outros métodos de autenticação, como LDAP. Outras fontes são implementadas na forma de plugins; veja a documentação disponível com o sistema e cada plugin para mais detalhes.</p>',
    ),
  ),
); ?>