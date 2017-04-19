<?php return array (
  'plugins.importexport.users.displayName' => 'Plugin de Utilizadores em formato XML',
  'plugins.importexport.users.description' => 'Importar e exportar utilizadores',
  'plugins.importexport.users.cliUsage' => 'Usage: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [journal_path] [optional flags]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [role_path1] [role_path2] ...

Optional flags:
	continue_on_error: Se especificado, não interromper a importação de utilizadores se o erro persistir

	send_notify: Se especificado, enviar e-mails de notificação contendo os nomes de utilizadores
		e senhas para os utilizadores importados

Examplos:
	Importa utilizadores para myJournal de myImportFile.xml, continua em erro:
	{$scriptName} {$pluginName} importa myImportFile.xml myJournal continue_on_error

	Exporta todos os utilizadores de myJournal:
	{$scriptName} {$pluginName} exporta myExportFile.xml myJournal

	Exporta todos os utilizadores registados como revisores, assim como os seus papéis:
	{$scriptName} {$pluginName} exporta myExportFile.xml myJournal revisor',
  'plugins.importexport.users.import.importUsers' => 'Importar Utilizadores',
  'plugins.importexport.users.import.instructions' => 'Seleccionar um ficheiro de dados em XML contendo a informação do utilizador a ser importado para a revista. Consulte Ajuda para obter ajuda mais informações e detalhes sobre o formato deste ficheiro.<br /><br />Note que se o ficheiro importado contiver quaisquer nomes de utilizador ou endereços de mail existentes no sistema, os dados desse utilizador não serão importados e qualquer novo papel a ser criado não será designado aos utilizadores existentes.',
  'plugins.importexport.users.import.failedToImportUser' => 'Insucesso na importação de utilizador',
  'plugins.importexport.users.import.failedToImportRole' => 'Insucesso ao designar um papel ao utilizador',
  'plugins.importexport.users.import.dataFile' => 'Ficheiro de dados do utilizador',
  'plugins.importexport.users.import.sendNotify' => 'Enviar um e-mail de notificação a cada utilizador importado contendo os nomes de utilizador e senha.',
  'plugins.importexport.users.import.continueOnError' => 'Continuar a importar outros utilizadores se o insucesso ocorrer.',
  'plugins.importexport.users.import.noFileError' => 'Nenhum ficheiro transferido!',
  'plugins.importexport.users.import.usersWereImported' => 'Os seguintes utilizadores foram importados com sucesso para o sistema',
  'plugins.importexport.users.import.errorsOccurred' => 'Erros ocorridos durante a importação',
  'plugins.importexport.users.import.confirmUsers' => 'Confirme se estes são os utilizadores que pretende importar para o sistema',
  'plugins.importexport.users.import.warning' => 'Advertência',
  'plugins.importexport.users.import.encryptionMismatch' => 'Não é possível usar senhas com erro {$importHash}; OJS é configurado para usar {$ojsHash}. Se prosseguir, será necessário restaurar as senhas dos utilizadores importados.',
  'plugins.importexport.users.unknownJournal' => 'Um caminho desconhecido do jornal "{$journalPath}" foi especificado..',
  'plugins.importexport.users.export.exportUsers' => 'Exportar Utilizadores',
  'plugins.importexport.users.export.exportByRole' => 'Exportar Por Papel',
  'plugins.importexport.users.export.exportAllUsers' => 'Exportar Todos',
  'plugins.importexport.users.export.errorsOccurred' => 'Erros ocorridos durante a exportação',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Não é possível escrever no ficheiro "{$fileName}".',
); ?>