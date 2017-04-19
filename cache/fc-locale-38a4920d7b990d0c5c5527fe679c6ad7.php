<?php return array (
  'plugins.generic.backup.name' => 'Cópia de segurança',
  'plugins.generic.backup.description' => 'Este plugin gera uma cópia de segurança da instalação.',
  'plugins.generic.backup.link' => 'Descarregar cópia de segurança',
  'plugins.generic.backup.longdescription' => '<p>Os seguintes links permitem ao administrador descarregar um backup completo dos vários componentes da instalação do OJS. Um backup completo contém <strong>todos</strong> os componentes da revista. Consulte a documentação técnica para mais informação.</p>',
  'plugins.generic.backup.db' => 'Base de dados',
  'plugins.generic.backup.files' => 'Ficheiros',
  'plugins.generic.backup.code' => 'Código fonte',
  'plugins.generic.backup.db.config' => '{$footNoteNum}. <strong>ATENÇÃO:</strong> O dump da base de dados não foi configurado no ficheiro de configuração: config.inc.php. A configuração vai depender da configuração do seu servidor e da base de dados que utilizar. Deve ser especificada na secção designada [cli], na opção de configuração designada "dump". Para MySQL, utilize a ferramenta mysqldump, exemplo:<br />
<pre>[cli]
dump = "/usr/bin/mysqldump -h %s -u %s -p%s %s"
</pre>
Os parâmetros "%s" serão substituídos, na seguinte ordem, por:<ol>
	<li>Servidor da base de dados</li>
	<li>Login da base de dados</li>
	<li>Senha de acesso à base de dados</li>
	<li>Nome da base de dados</li>
</ol>
Note que esta operação implica especificar a password da base de dados na linha de comandos, o que pode envolver problemas de segurança.<br /><br />',
  'plugins.generic.backup.tar.config' => '{$footNoteNum}. strong>ATENÇÃO:</strong> A ferramenta "tar" não foi configurada no ficheiro de configuração: config.inc.php. A configuração vai depender da configuração do seu servidor. Deve ser especificada na secção designada [cli], na opção de configuração designada "tar", especificando o caminho para a ferramenta "tar", exemplo:<br />
<pre>[cli]
tar = "/bin/tar"
</pre><br />',
  'plugins.generic.backup.failure' => '<strong>ATENÇÃO: </strong>Pode ter ocorrido um erro no processamento do backup. A causa mais provável poderá ser um problema de permissões de escrita.',
); ?>