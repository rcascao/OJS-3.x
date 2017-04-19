<?php return array (
  'plugins.auth.ldap.displayName' => 'LDAP',
  'plugins.auth.ldap.description' => 'Plugin de Autenticação LDAP.',
  'plugins.auth.ldap.settings' => 'Configurações LDAP',
  'plugins.auth.ldap.settings.hostname' => 'Servidor',
  'plugins.auth.ldap.settings.hostname.description' => 'Ex.: "ldap.example.com", ou "ldaps://ldap.example.com" (para uso com SSL)',
  'plugins.auth.ldap.settings.port' => 'Porta',
  'plugins.auth.ldap.settings.port.description' => 'Opcional. Valor padrão é 389 (LDAP) ou 636 (LDAP sobre SSL)',
  'plugins.auth.ldap.settings.basedn' => 'Base DN',
  'plugins.auth.ldap.settings.basedn.description' => 'Ex.: "ou=people,dc=example,dc=com"',
  'plugins.auth.ldap.settings.managerdn' => 'Gestor DN',
  'plugins.auth.ldap.settings.managerdn.description' => 'Ex.: "cn=Manager,dc=example,dc=com"',
  'plugins.auth.ldap.settings.managerpwd' => 'Senha',
  'plugins.auth.ldap.settings.managerpwd.description' => 'O Gestor DN e a Senha são obrigatórios apenas quando se utiliza a sincronização de registo/senha ou as opções de criação de utilizador são activadas. Caso o LDAP seja usado apenas para autenticação, estas opções podem ser ignoradas.',
  'plugins.auth.ldap.settings.pwhash' => 'Criptografia da Senha',
  'plugins.auth.ldap.settings.pwhash.description' => 'Formato de criptografia para senhas armazenadas no servidor. SHA1 recomendado (requer PHP >= 4.3.0).',
  'plugins.auth.ldap.settings.saslopt' => 'Configurações SASL (opcional)',
  'plugins.auth.ldap.settings.sasl' => 'Utilizar SASL ao invés de autenticação simples(requer PHP >= 5)',
  'plugins.auth.ldap.settings.saslmech' => 'Mecanismo SASL',
  'plugins.auth.ldap.settings.saslmech.description' => 'Ex.: "DIGEST-MD5"',
  'plugins.auth.ldap.settings.saslrealm' => 'Domínio',
  'plugins.auth.ldap.settings.saslauthzid' => 'ID de Autorização Solicitado',
  'plugins.auth.ldap.settings.saslprop' => 'Propriedades de Segurança SASL',
  'plugins.auth.ldap.settings.uid' => 'Atributo do nome da conta',
  'plugins.auth.ldap.settings.uid.description' => 'O atributo cujo valor identifica unicamente o objecto do utilizador, tais como uid ou vc ou sAMAccountName.',
); ?>