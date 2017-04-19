<?php return array (
  'plugins.importexport.native.displayName' => 'Plugin XML de Artigos e Edições',
  'plugins.importexport.native.description' => 'Importar e exportar artigos e edições',
  'plugins.importexport.native.cliUsage' => 'Uso: {$scriptName} {$pluginName} [comando] ...

Comandos:

	import [xmlFileName] [journal_path] [user_name] ...

	export [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...

	export [xmlFileName] [journal_path] article [articleId]

	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...

	export [xmlFileName] [journal_path] issue [issueId]



Parâmetros adicionais são obrigatórios para importar dados, dependendo da nodo raíz do documento XML, conforme a seguir:



Se o nodo raís é <article> ou <articles>, parâmetros adicionais são obrigatórios.

Os seguintes formatos são aceites:



{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]

	issue_id [issueId] section_id [sectionId]



{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]

	issue_id [issueId] section_name [name]



{$scriptName} {$pluginName} import [xmlFileName] [journal_path]

	issue_id [issueId] section_abbrev [abbrev]',
  'plugins.importexport.native.export' => 'Exportar dados',
  'plugins.importexport.native.export.issues' => 'Exportar edições',
  'plugins.importexport.native.export.sections' => 'Exportar secções',
  'plugins.importexport.native.export.articles' => 'Exportar artigos',
  'plugins.importexport.native.selectIssue' => 'Escolher edição',
  'plugins.importexport.native.selectArticle' => 'Escolher artigo',
  'plugins.importexport.native.import.articles' => 'Importar artigos',
  'plugins.importexport.native.import.articles.description' => 'O ficheiro importado contém um ou mais artigos. Escolha a edição e a secção para a qual deseja importar os dados; caso não deseje importar todos para a mesma secção e/ou edição, os mesmos podem ser separados em documentos XML diferentes ou movê-los às secções e edições correctas após a importação.',
  'plugins.importexport.native.import' => 'Importar dados',
  'plugins.importexport.native.import.description' => 'Este plugin suporta a importação de dados baseados no native.dtd Document Type Definition. Nodos raís suportados são <article>, <articles>, <issue>, and <issues>.',
  'plugins.importexport.native.import.error' => 'Erro na importação',
  'plugins.importexport.native.import.error.description' => 'Ocorreram um ou mais erros durante o processo. Certifique-se que o ficheiro apresenta o formato correcto. O detalhe dos erros está listado a seguir.',
  'plugins.importexport.native.cliError' => 'ERRO:',
  'plugins.importexport.native.error.unknownUser' => 'Utilizador indicado, "{$userName}", não existe.',
  'plugins.importexport.native.error.unknownJournal' => 'Caminho da revista "{$journalPath}" não existe.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'Não foi possível escrever no ficheiro "{$fileName}".',
  'plugins.importexport.native.export.error.sectionNotFound' => 'Não há secção compatível com código  "{$sectionIdentifier}".',
  'plugins.importexport.native.export.error.issueNotFound' => 'Não há edição compatível com o ID "{$issueId}".',
  'plugins.importexport.native.export.error.articleNotFound' => 'Nenhum artigo é compatível com o ID "{$articleId}".',
  'plugins.importexport.native.import.error.unsupportedRoot' => 'Este plugin não suporta o nodo raíz "{$rootName}". Certifique-se de que o documento está correctamente identificado e tente novamente.',
  'plugins.importexport.native.import.error.titleMissing' => 'Não foi indicado um Título para a edição.',
  'plugins.importexport.native.import.error.defaultTitle' => 'TÍTULO EM FALTA',
  'plugins.importexport.native.import.error.unknownIdentificationType' => 'Identificação "{$identificationType}" desconhecida informada no atributo "identification", do elemento "issue" da edição "{$issueTitle}".',
  'plugins.importexport.native.import.error.invalidBooleanValue' => 'O valor boleano "{$value}" é inválido. Utilize apenas "true" ou "false".',
  'plugins.importexport.native.import.error.invalidDate' => 'A data "{$value}" é inválida.',
  'plugins.importexport.native.import.error.unknownEncoding' => 'Os dados "{$type}" embutidos possuem codificação desconhecida.',
  'plugins.importexport.native.import.error.couldNotWriteFile' => 'Não foi possivel guardar cópia de "{$originalName}".',
  'plugins.importexport.native.import.error.illegalUrl' => 'URL "{$url}" da edição "{$issueTitle}" ilegal. Importações via Web suportam apenas métodos http, https, ftp, ou ftps.',
  'plugins.importexport.native.import.error.unknownSuppFileType' => 'O tipo de ficheiro suplementar "{$suppFileType}" é desconhecido.',
  'plugins.importexport.native.import.error.couldNotCopy' => 'O URL "{$url}" não pode ser copiado para um ficheiro local.',
  'plugins.importexport.native.import.error.duplicatePublicIssueId' => 'O ID público para importar a edição "{$issueTitle}" já se encontra em uso pela edição "{$otherIssueTitle}".',
  'plugins.importexport.native.import.error.sectionTitleMissing' => 'Não foi indicado um título de secção para a edição "{$issueTitle}". Certifique-se que o documento XML está em conformidade com a DTD apropriada.',
  'plugins.importexport.native.import.error.sectionMismatch' => 'A secção "{$sectionTitle}" da edição "{$issueTitle}" é compatível com uma revista existente, mas a abreviatura ("{$sectionAbbrev}") é compatível com outra secção.',
  'plugins.importexport.native.import.error.articleTitleMissing' => 'Não foi indicado um título de artigo na edição "{$issueTitle}", secção "{$sectionTitle}". Certifique-se de que o documento XML está em conformidade com a DTD apropriada, e que um título foi fornecido para o idioma da revista.',
  'plugins.importexport.native.import.error.articleTitleLocaleUnsupported' => 'O idioma ("{$locale}") do título do artigo ("{$articleTitle}"), da edição "{$issueTitle}", não é suportado pela revista.',
  'plugins.importexport.native.import.error.articleAbstractLocaleUnsupported' => 'O idioma ("{$locale}") do resumo do artigo "{$articleTitle}", da edição "{$issueTitle}", não é suportado pela revista.',
  'plugins.importexport.native.import.error.galleyLabelMissing' => 'Falta informação sobre prova do artigo "{$articleTitle}", da secção "{$sectionTitle}", da edição "{$issueTitle}".',
  'plugins.importexport.native.import.error.suppFileMissing' => 'Falta um documento suplementar no artigo "{$articleTitle}", da secção "{$sectionTitle}", da edição "{$issueTitle}".',
  'plugins.importexport.native.import.error.galleyFileMissing' => 'Falta um documento de prova do artigo "{$articleTitle}", da secção "{$sectionTitle}", da edição "{$issueTitle}".',
  'plugins.importexport.native.import.success' => 'Importação de dados concluída com sucesso.',
  'plugins.importexport.native.import.success.description' => 'A importação de dados ocorreu sem problemas. Os artigos importados estão listados a seguir.',
  'plugins.importexport.native.import.error.issueTitleLocaleUnsupported' => 'O título da edição ("{$issueTitle}") foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.issueDescriptionLocaleUnsupported' => 'A descrição da edição "{$issueTitle}" foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.coverLocaleUnsupported' => 'A capa da edição "{$issueTitle}" foi fornecido num idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.sectionTitleLocaleUnsupported' => 'O título da secção ("{$sectionTitle}") foi fornecido na edição "{$issueTitle}" no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.sectionAbbrevLocaleUnsupported' => 'A abreviatura da secção ("{$sectionAbbrev}") foi fornecido na edição ("{$issueTitle}") no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.sectionIdentifyTypeLocaleUnsupported' => 'O tipo de identificação de secção ("{$sectionIdentifyType}") foi fornecido na edição  ("{$issueTitle}") no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.sectionPolicyLocaleUnsupported' => 'A política da secção ("{$sectionPolicy}") foi indicada na edição ("{$issueTitle}") no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'O título da secção "{$section1Title}" e o título da secção  "{$section2Title}" na edição "{$issueTitle}" são compatíveis com edições diferentes existentes na revista.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'O título da secção "{$sectionTitle}" na edição "{$issueTitle}" é compatível com uma secção existente, mas o outro título desta secção não é compatível com o outro título da secção existente na revista.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'A abreviatura da secção "{$section1Abbrev}" e a abreviatura da secção "{$section2Abbrev}" da edição "{$issueTitle}" são compatíveis com seções distintas existentes na revista.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'A abreviatura da secção "{$sectionAbbrev}" da edição "{$issueTitle}" é compatível com uma secção existente, mas outra abreviatura desta edição não é compatível com outra abreviatura de secção existente na revista.',
  'plugins.importexport.native.import.error.articleDisciplineLocaleUnsupported' => 'A (sub)área do conhecimento do "{$articleTitle}" da edição "{$issueTitle}" foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleTypeLocaleUnsupported' => 'O tipo de artigo para "{$articleTitle}" na edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSubjectLocaleUnsupported' => 'O assunto do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSubjectClassLocaleUnsupported' => 'A classificação de assunto do artigo "{$articleTitle}"da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleCoverageGeoLocaleUnsupported' => 'A cobertura geo-espacial do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleCoverageChronLocaleUnsupported' => 'A cobertura cronológica do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleCoverageSampleLocaleUnsupported' => 'A cobertura de amostragem do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSponsorLocaleUnsupported' => 'O patrocinador do artigo "{$articleTitle}" da edição "{$issueTitle}"foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleAuthorCompetingInterestsLocaleUnsupported' => 'O conflito de interesses do autor "{$authorFullName}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleAuthorBiographyLocaleUnsupported' => 'A biografia do autor "{$authorFullName}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.galleyLocaleUnsupported' => 'A prova final do artigo "{$articleTitle}" da edição "{$issueTitle}" foi indicada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileTitleLocaleUnsupported' => 'O título do ficheiro suplementar ("{$suppFileTitle}") do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileCreatorLocaleUnsupported' => 'O criador do ficheiro suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileSubjectLocaleUnsupported' => 'O assunto do ficheiro suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileTypeOtherLocaleUnsupported' => 'O tipo do ficheiro suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileDescriptionLocaleUnsupported' => 'A descrição do documento suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFilePublisherLocaleUnsupported' => 'A editora do documento suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileSponsorLocaleUnsupported' => 'O patrocinador do documento suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileSourceLocaleUnsupported' => 'A fonte do documento suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi fornecido no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.error.uploadFailed' => 'O envio falhou; certifique-se de que o envio de ficheiros está activado no servidor e que o ficheiro não é maior que o permitido pelo PHP e/ou a configuração do servidor.',
  'plugins.importexport.native.import.error.articleAuthorAffiliationLocaleUnsupported' => 'Foi fornecida uma afiliação para o autor "{$authorFullName}" do artigo "{$articleTitle}" no número "{$issueTitle}" num local ("{$locale}") que esta revista não suporta.',
  'plugins.importexport.native.import.error.duplicatePublicGalleyId' => 'O ID público indicado para a prova importada "{$publicId}" está a ser usado por outra prova para o mesmo artigo, "{$articleTitle}".',
  'plugins.importexport.native.import.error.duplicatePublicSuppFileId' => 'O ID público indicado para o ficheiro suplementar importado "{$suppFileTitle}" está a ser usado por outro ficheiro suplementar para o mesmo artigo, "{$otherSuppFileTitle}".',
  'plugins.importexport.native.import.error.duplicatePublicArticleId' => 'O ID público indicado para o artigo importado "{$articleTitle}" está a ser usado por outro artigo, "{$otherArticleTitle}".',
  'plugins.importexport.native.import.error.invalidPubId' => 'O ficheiro importado contém dados com um inválido {$pubIdType}: \'{$pubId}\'.',
  'plugins.importexport.native.import.error.duplicatePubId' => 'O ficheiro importado contém um conjunto de dados com {$pubIdType} \'{$pubId}\' que já existe noutro objecto na base de dados. Por favor, certifique-se de que nunca importa objectos com IDs que já existem na base de dados.',
  'plugins.importexport.native.import.error.unknownPubId' => 'O ficheiro importado contém um conjunto de dados com um tipo ID \'{$pubIdType}\' que nenhum plugin pode manipular. Por favor, instale e / ou active o correspondente plugin antes de tentar importar este conjunto de dados.',
); ?>