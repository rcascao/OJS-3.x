<?php return array (
  'rtDefineTerms' => true,
  'rtAuthorBio' => true,
  'rtPrinterFriendly' => true,
  'rtAbstract' => true,
  'rtCaptureCite' => true,
  'rtViewMetadata' => true,
  'rtSupplementaryFiles' => true,
  'donationFeeEnabled' => false,
  'restrictOnlyPdf' => false,
  'acceptSubscriptionPayments' => false,
  'supportedLocales' => 
  array (
    0 => 'en_US',
    1 => 'pt_PT',
  ),
  'supportedFormLocales' => 
  array (
    0 => 'en_US',
    1 => 'pt_PT',
  ),
  'supportedSubmissionLocales' => 
  array (
    0 => 'en_US',
    1 => 'pt_PT',
  ),
  'includeCreativeCommons' => true,
  'refLinkInstructions' => 
  array (
    'pt_PT' => '<p><strong>Para incluir Referências Ativas no processo de Layout</strong></p><p>Ao transformar a submissão para HTML ou PDF, assegure-se de que todos os hiperlinks estão ativos.</p><p><strong>A. Quando o autor informa o Link para a Referência</strong></p><ol><li>Enquanto a submissão ainda está num formato de edição de texto original (ex.: Word), inclua a frase VISUALIZAR ITEM no final da referência que possui uma URL.</li><li>Transforme a frase num hiperlink seleccionando-a e utilizando a ferramenta do Word Inserir Hiperlink informando a URL criada no passo #2 no campo respetivo.</li></ol><p><strong>B. Permitindo aos Leitores buscas por referências no Google Académico</strong></p><ol><li>Enquanto a submissão ainda está num formato de edição de texto original (ex.: Word), copie o título do trabalho referenciado na lista de Referências (caso pareça ser um título muito comum – por exemplo "Paz" – copie o autor e o título).</li><li>Cole o texto selecionado entre as marcações de espaço %22, incluindo o sinal + entre cada palavra: <a href="http://scholar.google.com/scholar?q=%22PASTE+TITLE+HERE%22&amp;hl=en&amp;lr=&amp;btnG=Search">http://scholar.google.com/scholar?q=%22PASTE+TITLE+HERE%22&amp;hl=en&amp;lr=&amp;btnG=Search</a></li><li>Inclua a frase GS SEARCH no final de cada citação na lista de Referências da submissão.</li><li>Transforme a frase em um hiperlink selecionando-a e utilizando a ferramenta do Word Inserir Hiperlink informando a URL criada no passo #2 no campo respectivo.</li></ol><p><strong>C. Permitindo aos Leitores pesquisas por referências que possuem DOI</strong></p><ol><li>Enquanto a submissão ainda está num formato de edição de texto original (ex.: Word), copie um grupo de referências na ferramenta CrossRef Text Query (<a href="http://www.crossref.org/freeTextQuery/">http://www.crossref.org/freeTextQuery/</a>)</li><li>Cole cada DOI que a ferramenta Query retorna na seguinte URL (entre os sinais = e &amp;): <a href="http://www.cmaj.ca/cgi/external_ref?access_num=COLE">http://www.cmaj.ca/cgi/external_ref?access_num=COLE</a> O DOI#AQUI&amp;link_type=DOI</li><li>Inclua a frase CrossRef no final de cada citação na lista de Referências da submissão.</li><li>Transforme a frase num hiperlink selecionando-a e utilizando a ferramenta do Word Inserir Hiperlink informando a URL criada no passo #2 no campo respetivo.</li></ol>',
  ),
  'emailSignature' => 'Com os nossos melhores cumprimentos
[Kind Regards]

Helena Espírito Santo
Sónia Guadalupe

Editoras-chefe
[Editors-in-chief]
Revista Portuguesa de Investigação Comportamental e Social [Portuguese Journal of Behavioral and Social Research]

Email: investig@ismt.pt
http://rpics.ismt.pt',
  'proofInstructions' => 
  array (
    'pt_PT' => '<p>O processo de leitura de provas tem por objetivo corrigir erros de ortografia, gramática e formatação na composição. Alterações mais importantes não podem ser realizadas nesta etapa, sem o consentimento do editor da secção. No Layout, clique em Visualizar Prova para ver a composição em HTML, PDF e/ou outro formato disponível.</p><p><strong>Erros de Ortografia e Gramática</strong></p><p>Copie a palavra com problemas ou o conjunto de palavras e cole no campo de Alterações da Prova com as instruções de "ALTERE-PARA" conforme as instruções a seguir.</p><p>1. ALTERE</p><p>a pesquisa envolve</p><p>PARA</p><p>a pesquisa envolveu</p><p> </p><p>2. ALTERE</p><p>Malinowsky</p><p>PARA</p><p>Malinowski</p><p> </p><p><strong>Erros de Formatação</strong></p><p>Descreva o local e a natureza do problema na caixa Alterações da Prova, após digitar no título "FORMATAÇÃO" conforme as instruções a seguir...</p><p> </p><p><strong>3. FORMATAÇÃO</strong></p><p>Os números na Tabela 3 não estão alinhadas na 3ª coluna.</p><p> </p><p><strong>4. FORMATAÇÃO</strong></p><p>O parágrafo iniciado em "Este último elemento..." não está recuado.</p>',
  ),
  'openAccessPolicy' => 
  array (
    'pt_PT' => '<script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><p>A RPICS oferece <strong><em>acesso livre</em></strong> imediato ao seu conteúdo, seguindo o princípio de que disponibilizar gratuitamente o conhecimento científico ao público proporciona maior democratização mundial do conhecimento.</p>',
    'en_US' => '<p><span>PJBSR provides immediate <em><strong>open access</strong></em> to its content, on the principle that freely available scientific knowledge to the public supports a greater global knowledge.</span></p>',
  ),
  'statNumPublishedIssues' => true,
  'statItemsPublished' => true,
  'statNumSubmissions' => true,
  'statPeerReviewed' => true,
  'statCountAccept' => false,
  'statCountDecline' => false,
  'statCountRevise' => false,
  'statDaysPerReview' => true,
  'statDaysToPublication' => true,
  'statRegisteredUsers' => true,
  'statRegisteredReaders' => true,
  'statSubscriptions' => false,
  'statViews' => true,
  'statisticsSectionIds' => 
  array (
  ),
  'journalPaymentsEnabled' => true,
  'currency' => 'EUR',
  'submissionFeeEnabled' => true,
  'fastTrackFeeEnabled' => false,
  'purchaseArticleFeeEnabled' => true,
  'membershipFeeEnabled' => false,
  'useLayoutEditors' => false,
  'provideRefLinkInstructions' => true,
  'useProofreaders' => false,
  'publishingMode' => 0,
  'showGalleyLinks' => false,
  'enableAnnouncements' => true,
  'enableAnnouncementsHomepage' => false,
  'authorSelfArchivePolicy' => 
  array (
    'pt_PT' => 'Esta revista permite e encoraja os autores a submeterem artigos para a revista ou repositórios institucionais, antes e após a publicação (sempre oferecendo uma indexação detalhada do artigo).',
  ),
  'numWeeksPerReview' => 4,
  'itemsPerPage' => 5,
  'numPageLinks' => 5,
  'rtAddComment' => true,
  'rtEmailAuthor' => true,
  'rtEmailOthers' => true,
  'allowRegReviewer' => true,
  'allowRegAuthor' => true,
  'allowRegReader' => true,
  'submissionFee' => 0,
  'submissionFeeName' => 
  array (
    'pt_PT' => 'Submissão de artigo',
    'en_US' => 'Article Submission',
  ),
  'submissionFeeDescription' => 
  array (
    'pt_PT' => 'Os autores não têm de pagar qualquer taxa para submissão de artigos.',
    'en_US' => 'Authors do not have to pay for<span> submission of papers.</span>',
  ),
  'publicationFeeEnabled' => true,
  'fastTrackFee' => 0,
  'publicationFee' => 0,
  'purchaseArticleFee' => 0,
  'membershipFee' => 0,
  'donationFeeName' => 
  array (
    'pt_PT' => 'Doações à revista',
  ),
  'donationFeeDescription' => 
  array (
    'pt_PT' => 'Doações de qualquer valor são muito bem-vindas, e oferecem meios aos editores de manter a qualidade da revista no mais alto nível para os seus leitores e utilizadores.',
  ),
  'metaCitations' => true,
  'title' => 
  array (
    'en_US' => 'Portuguese Journal of Behavioral and Social Research',
    'pt_PT' => 'Revista Portuguesa de Investigação Comportamental e Social',
  ),
  'librarianInformation' => 
  array (
    'en_US' => '<p><span>We invite libraries to list Open Access journals in their catalogs, electronic magazines. This publishing system is also designed to be hosted and operated by research libraries to support the work of magazine publishing of academic staff. For more information about Open Journal Systems — OJS, and the administration and publication of peer-reviewed journals, see <a href="http://pkp.sfu.ca/">Public Knowledge Project</a>.</span></p>',
    'pt_PT' => '<p>Convidamos as bibliotecas a listar revistas de Acesso Livre nos seus catálogos de revistas eletrónicas. Este sistema de publicação é desenvolvido também para ser hospedado e operado por bibliotecas de pesquisa em apoio ao trabalho de publicação de revistas de corpo académico. Para mais informações sobre o Open Journal Systems - OJS, e a administração e publicação de revistas por pares visite o <a href="http://pkp.sfu.ca">Public Knowledge Project</a>.</p>',
  ),
  'articleEventLog' => true,
  'articleEmailLog' => true,
  'publicationFormatVolume' => true,
  'publicationFormatNumber' => true,
  'publicationFormatYear' => true,
  'publicationFormatTitle' => true,
  'initialVolume' => 1,
  'initialNumber' => 1,
  'initialYear' => 2015,
  'useCopyeditors' => false,
  'numAnnouncementsHomepage' => 0,
  'volumePerYear' => 1,
  'issuePerVolume' => 2,
  'enablePublicIssueId' => false,
  'enablePublicArticleId' => true,
  'enablePublicGalleyId' => true,
  'enablePublicSuppFileId' => false,
  'enablePageNumber' => true,
  'notifyAllAuthorsOnDecision' => true,
  'abbreviation' => 
  array (
    'pt_PT' => 'Rev Port Inv Comp Soc',
    'en_US' => 'Port J Behav Soc Res',
  ),
  'contactAffiliation' => 
  array (
    'pt_PT' => 'Instituto Superior Miguel Torga',
    'en_US' => 'Departamento de Investigação & Desenvolvimento do Instituto Superior Miguel Torga',
  ),
  'enableLockss' => true,
  'reviewerDatabaseLinks' => 
  array (
    0 => 
    array (
      'title' => 'DeGóis',
      'url' => 'http://www.degois.pt/index.jsp?id=0&pos=1',
    ),
    1 => 
    array (
      'title' => 'Authenticus',
      'url' => 'https://authenticus.up.pt/pt/publications/search',
    ),
    2 => 
    array (
      'title' => 'ORCID',
      'url' => 'http://orcid.org',
    ),
    3 => 
    array (
      'title' => 'Currículos Lattes',
      'url' => 'http://lattes.cnpq.br',
    ),
  ),
  'reviewerAccessKeysEnabled' => true,
  'showEnsuringLink' => true,
  'mailSubmissionsToReviewers' => true,
  'authorSelectsEditor' => false,
  'remindForSubmit' => false,
  'numDaysBeforeInviteReminder' => 0,
  'numDaysBeforeSubmitReminder' => 0,
  'rateReviewerOnQuality' => true,
  'restrictReviewerFileAccess' => true,
  'remindForInvite' => false,
  'contactEmail' => 'investig@ismt.pt',
  'contactPhone' => '00351239483055',
  'contactFax' => '00351239 825 327',
  'supportName' => 'Helpdesk ISMT',
  'supportEmail' => 'helpdesk@ismt.pt',
  'supportPhone' => '',
  'sponsors' => 
  array (
  ),
  'publisherInstitution' => 'Instituto Superior Miguel Torga',
  'publisherUrl' => 'http://www.ismt.pt/',
  'contributors' => 
  array (
  ),
  'envelopeSender' => '',
  'contactTitle' => 
  array (
    'en_US' => 'PhD',
    'pt_PT' => 'Professoras Auxiliares',
  ),
  'contactName' => 'Helena Espírito Santo & Sónia Guadalupe',
  'useEditorialBoard' => false,
  'mailingAddress' => '<script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><strong><span style="-webkit-text-stroke-width: initial;">Departamento de Investigação &amp; Desenvolvimento</span></strong></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">Instituto Superior Miguel Torga</span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">Rua Augusta, 46 </span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">3000-061 Coimbra</span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">PORTUGAL</span></p>',
  'categories' => NULL,
  'pageHeaderTitle' => 
  array (
    'en_US' => 'Portuguese Journal of Behavioral and Social Research',
    'pt_PT' => 'Revista Portuguesa de Investigação Comportamental e Social',
  ),
  'onlineIssn' => '2183-4938',
  'printIssn' => '',
  'initials' => 
  array (
    'en_US' => 'PJBSR',
    'pt_PT' => 'RPICS',
  ),
  'homeHeaderLogoImageAltText' => 
  array (
    'en_US' => 'Logo do ISMT',
    'pt_PT' => 'Revista Portuguesa de Investigação Comportamental e Social',
  ),
  'disableUserReg' => false,
  'restrictSiteAccess' => false,
  'displayCurrentIssue' => true,
  'journalTheme' => 'vanilla',
  'restrictArticleAccess' => false,
  'copyrightNoticeAgree' => true,
  'requireAuthorCompetingInterests' => true,
  'requireReviewerCompetingInterests' => false,
  'metaDiscipline' => true,
  'metaDisciplineExamples' => 
  array (
    'pt_PT' => 'Psicologia; Serviço Social; Sociologia',
    'en_US' => 'Psychology, Social Work, Sociology',
  ),
  'metaSubjectClass' => false,
  'metaSubjectClassUrl' => 
  array (
    'pt_PT' => 'http://',
    'en_US' => 'http://',
  ),
  'metaSubject' => true,
  'metaSubjectExamples' => 
  array (
    'pt_PT' => 'Satisfação com a vida; Afetividade; Redes sociais',
    'en_US' => 'Satisfaction with life; Social work; Sociology',
  ),
  'metaCoverage' => true,
  'metaCoverageResearchSampleExamples' => 
  array (
    'pt_PT' => 'por idade; por género; por etnia; grau de instrução',
    'en_US' => 'Age; Gender; Ethnicity',
  ),
  'metaType' => true,
  'metaCitationOutputFilterId' => 54,
  'copySubmissionAckPrimaryContact' => true,
  'copySubmissionAckSpecified' => true,
  'copySubmissionAckAddress' => 'investig@ismt.pt',
  'searchDescription' => 
  array (
    'pt_PT' => 'Revista Portuguesa de Investigação Comportamental e Social',
    'en_US' => 'Portuguese Journal of Behavioral and Social Research is is concerned mainly with empirical research conducted in behavioral and social fields.',
  ),
  'boardEnabled' => true,
  'competingInterestGuidelines' => 
  array (
    'pt_PT' => '<p>A RPICS exije que todos os autores declarem qualquer conflito de interesse potencial e/ou qualquer tipo de apoio financeiro para o estudo obtido nos últimos 3 anos ou num futuro previsível. Esta declaração inclui bolsas, empregos, afiliações, relações com organizações financiadoras (governamentais, comerciais, não-profissionais, etc.), aulas entre outras; independente do valor envolvido. Se um ou mais autores não possuírem conflitos de interesse a serem declarados, isto precisa ser indicado explicitamente (p.e., Os Drs. xx e yy não possuem conflitos de interesse a serem declarados).</p>',
    'en_US' => '<p><span>The PJSBR demands that all authors declare any potential conflict of interest and/or any kind of financial support for the study obtained in the last 3 years and for the foreseeable future. This statement includes scholarships, jobs, affiliations, relationships with funding organizations (governmental, commercial, non-professional, etc.), classes, among others; regardless of the amount involved. If one or more authors do not have conflicts of interest to be declared, this must be explicitly stated (e.g., Drs. xx and yy have no conflicts of interest to be declared).</span></p>',
  ),
  'templates' => 
  array (
    0 => 
    array (
      'originalFilename' => 'LAYOUT RPICS1.miolo.docx',
      'fileType' => 'application/zip',
      'filename' => 'template-1.docx',
      'title' => '',
    ),
  ),
  'enableComments' => '1',
  'rtEnabled' => true,
  'rtVersionId' => 35,
  'rtFindingReferences' => true,
  'rtSharingEnabled' => '',
  'rtSharingUserName' => '',
  'rtSharingButtonStyle' => '',
  'rtSharingDropDownMenu' => '',
  'rtSharingBrand' => '',
  'rtSharingDropDown' => '',
  'rtSharingLanguage' => '',
  'rtSharingLogo' => '',
  'rtSharingLogoBackground' => '',
  'rtSharingLogoColor' => '',
  'pubFreqPolicy' => 
  array (
    'pt_PT' => '<script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><p>A RPICS é publicada semestralmente.</p>',
    'en_US' => '<p>The PJBSR is published biannually.</p>',
  ),
  'copyeditInstructions' => 
  array (
    'pt_PT' => '<script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><p style="text-align: justify;">A edição de texto procura aperfeiçoar a leitura, clareza, gramática, vocabulário e formatação do documento. Representa a última oportunidade para o autor realizar alterações substanciais ao texto, e no próximo passo as correções são restritas a erros de redação e formatação. O documento a ser editado está no formato .doc, ou .rtf, permitindo a edição rápida por um processador de texto.</p><p style="text-align: justify;">As diretrizes descritas aqui constituem uma proposta para a edição que se baseia nas ferramentas de controle de alterações do Microsoft Word e requer que todos os envolvidos no processo possuam o programa. O editor tem poderes para modificar estas diretrizes, sugerindo melhorias no processo editorial da revista.</p><p style="text-align: justify;"><strong>Processo de Edição de Texto</strong></p><p style="text-align: justify;">Controle de Alterações do Microsoft Word. No menu Ferramentas, a opção Controle de alterações permite ao editor de texto incluir (o texto aparece em cores) ou remover (o texto aparece manchado a cores ou nas margens como removido) conteúdo. O editor de texto pode incluir comentários para o autor e o editor através do ícone de comentários na barra de ferramentas. A versão editada pode então ser enviada e o editor é notificado via e-mail. O editor revê as alterações no texto e notifica o autor. O editor e o autor devem manter as alterações com as quais concordem. No caso da necessidade de mais alterações, ambos podem alterar as modificações do editor de texto, além de incluir outras. Ambos devem responder aos comentários remetidos, com respostas nos campos de comentário específicos. Após a revisão do texto por parte do editor e do autor, o editor de texto deverá realizar uma última revisão, aceitando as alterações para proceder à fase de Layout e Composição para publicação.</p><p style="text-align: justify;"><strong>Exemplo de uma Revisão Eletrónica</strong></p><p style="text-align: justify;"><em>Manuscrito original.</em> Antes de alterar dramaticamente a estrutura e organização do texto original, apresente o documento aos autores. Após o término das suas revisões, renomeie o ficheiro de NomedoAutorQA.doc para NomedoAutorQAR.doc (ex.: de GamaQA.doc para GamaQAR.doc). Envie por correio eletrónico, contendo tanto a versão revista quanto a versão renomeada em Word.</p><p style="text-align: justify;"><em>Manuscrito devolvido para o autor, com dúvidas e sugestões.</em> Antes de alterar dramaticamente a estrutura e organização do texto original devolvido, apresente o documento aos co-autores do trabalho. Após o término das suas revisões, renomeie o arquivo de NomedoAutorQA.doc para NomedoAutorQAR.doc (ex.: de GamaQA.doc para GamaQAR.doc). Envie por correio eletrónico tanto a versão revista quanto a versão renomeada em Word. É importante que siga as instruções atentamente ao realizar as revisões eletrónicas. Caso contrário, o processo de edição pode demorar consideravelmente.</p><p style="text-align: justify;"><em>Manuscrito revisto devolvido para o autor.</em> Antes de alterar dramaticamente a estrutura e organização do texto original que estamos devolvendo, apresente o documento aos autores do trabalho.O não cumprimento das instruções a seguir pode atrasar consideravelmente a publicação do texto. Após o término das suas revisões, renomeie o arquivo de NomedoAutorQA.doc para NomedoAutorQAR.doc (ex.: de GamaQA.doc para GamaQAR.doc). Envie por correio eletrónico a versão revista e a versão renomeada em Word.</p><p style="text-align: justify;"> </p><p style="text-align: justify;"> </p>',
    'en_US' => '<p><span>Editing text seeks to improve the reading, clarity, grammar, vocabulary, and document formatting. Represents the last opportunity for the author make substantial changes to the text, and the next step corrections are restricted to text errors and formatting. The document is being edited in doc. <span id="GRmark_206de4e2afa68bed6a7510a8aa5b74ba09f5a125_or:0" class="GRcorrect">or</span> <span id="GRmark_206de4e2afa68bed6a7510a8aa5b74ba09f5a125_rtf:1" class="GRcorrect">rtf</span> allowing quick editing in a word processor. The guidelines described here presents a proposal for the edition which is based on tracking changes tools of Microsoft Word and requires that everyone involved in the process have the program. The editor has the power to change these guidelines and suggesting improvements in the editorial process of the journal.</span></p><p><br /> <span><strong>Procedures for Text Editing</strong></span></p><p><span><em>Track Changes in Microsoft Word.</em> On the Tools menu, the Control option allows changes to the text editor included (text appears in color) or remove (text appears in color or stained in margins as deleted). The text editor can add comments to the author and the editor via the feedback icon on the toolbar. The edited version can then be posted, and the editor is notified via e-mail. The editor reviews the changes in the text and notifies the author. The publisher and author should keep the changes with which they agree. In case of need for further amendments, modifications can alter both the text editor, and include others. Both should respond to comments submitted with answers in comment specific fields. Upon review of the text <span id="GRmark_e110ffae44aa4c50e6e7a26a05d9852b7e4fbd69_by:0" class="GRcorrect">by</span> the editor and the author, the text editor will do a final review, accepting the changes to proceed to phase Layout and Composition for publication.</span></p>',
  ),
  'reviewGuidelines' => 
  array (
    'en_US' => '<form><p><strong>Reviewers are asked to observe the following ethical guidelines:</strong></p><p><strong></strong>1. Maintain confidentiality about the manuscripts. Do not share data with colleagues before the manuscript is published.</p><p>2. Do not reproduce the manuscript.</p><p>3. Decline if you have some prejudice against the authors or against research.</p><p>4. Decline if they have a conflict of interest, revealing the conflict of interest. Conflicts of interest can be defined as a set of conditions (e.g., academic competition, certain philosophical values and beliefs) that may result in a biased or unfair assessment of the manuscript.</p><p>5. Meet the deadlines and inform if it becomes impossible to complete the review in time, asking for guidance on the possibility of refusing to review the manuscript or get an additional period of time.</p><p>6. Decline if unable to do the review within the specified period of time</p><p>7. State whether you have completed a previous revision of the manuscript for another journal.</p><p>8. Do not use the review as a way to promote your own research, or suggest the rejection of the paper because it contradicts your own work.</p><p><span><strong>We thank reviewers to follow the following steps:</strong></span></p><p><span>1. Provide an honest and constructive assessment of the value of the manuscript.</span><br /> <span> 2. Check if the writing style is:</span></p><p>• Clear: ideas written in a direct and unambiguous.</p><p>• Concise: lack of redundancy, presentation of words and phrases that communicate the idea in a simple way.</p><p>• Correct: accurate grammar and punctuation.</p><p><span>3. Analyze the strengths and weaknesses of the study in each section of the manuscript. For example:</span></p><p>• In the Introduction, the authors provide a convincing line of argument, cite relevant sources, focus on ideas (and not on facts or findings discrete), or raise questions and derivative hypotheses from the theory?</p><p>• In Methods, strategies are clearly described, the description of the sample has sufficient detail, the measures are well operationalized and have appropriate psychometric characteristics? Statistical methods are the most appropriate and well justified?</p><p>• The Results are presented clearly and follow the order of the research questions? Tables or figures are necessary and clear?</p><p>• In Discussion, the results are presented concisely and accurately, and represent the data presented previously? The results are integrated within a broader theoretical debate, including the revised references in the introduction? An effort was made to go beyond the facts and to present explanations? The introductory questions are answered? The limitations were reflected?</p><p><span>4. Give suggestions on how to make the manuscript more complete, relevant and readable.<br />5. Ask specific questions to the authors so that they make the manuscript more relevant to the target audience, but do not ask questions just because they are interesting, respecting the objectives and design of the study.<br />6. Check the references and indicate further if appropriate.<br />7. Indicate whether to the editor:</span></p><p>• The manuscript should be rejected in PJBSR.</p><p>• The manuscript should be accepted conditionally.</p><p>• The manuscript should be accepted.</p><p>The members of the Editorial Board undertake to perform 4-6 annual reviews and to do so in time. Those who consistently decline, or make revisions that do not make the deadlines are asked to leave the Editorial Board.</p><p>All reviewers will be scored by the quality and timeliness (up 5 points). The quality and timeliness of reviews are essential to the enhancement of PJBSR. Reviewers who do analysis of high value in a timely manner are providing an essential service to the journal.</p><p><span><strong>Reviewers have the following rights:</strong></span></p><p>1. Be informed of the decision of the Editor of manuscripts that evaluated for PJBSR.</p><p>2. Receive comments from other reviewers for their own edification.</p><p>3. A list of members of the Editorial Board will be published in each issue of the journal.</p><p>4. The reviewers that contribute to the high quality of the journal (4-5 points) will be included in the list of Reviewers of the PJBSR in the latest edition of the publication year, and may be invited to the Editorial Board of the following year.</p><p><br /> <span><strong>Reviewers are advised to be guided by the following references:</strong></span></p><p><span>Ramos-Alvarez, M. M., Moreno-Fernández, M. M., Valdés-Conroy, B., &amp; Catena, A. (2008). Criteria of the peer-review process for publication of experimental and quasi-experimental research in Psychology: A guide for creating research papers. <em>International Journal of Clinical Psychology and Health, 8,</em> 751-764.</span></p><p><span><strong>Sources</strong>:</span></p><p><span>Council on Scientific Editors appearing Editorial Policy Statement (2005). <em>Science, 25</em>(6). S. P.<br />Dembowski, F. L. (2010). Guidelines and advice to authors, editors and reviewers for professional journals and conference Proposals. <em>International Journal of Organizational Innovation, sv,</em> 1-53.</span></p></form>',
    'pt_PT' => '<form><p><strong>Os revisores são convidados a seguir as seguintes orientações éticas:</strong></p><ol><li>Manter a confidencialidade sobre os manuscritos.</li><li>Não partilhar dados com colegas antes do manuscrito ser publicado.</li><li>Não reproduzir o manuscrito.</li><li>Declinar se tiver algum preconceito contra os autores ou contra a investigação.</li><li>Declinar se tiver algum conflito de interesses, revelando qual o conflito de interesses. Os conflitos de interesse podem ser definidos como um conjunto de condições (p.e., competição académica, determinados valores filosóficos e crenças) que podem resultar numa avaliação tendenciosa ou injusta do manuscrito.</li><li>Respeitar os prazos de tempo especificados e informar se se tornar impossível concluir a análise em tempo útil, pedindo orientação sobre a possibilidade de recusar-se a rever o manuscrito ou obter um período adicional de tempo especificado.</li><li>Declinar se não o pode fazer no período de tempo especificado.</li><li>Informar se já fez a revisão prévia do manuscrito para outra revista.</li><li>Não usar a revisão como forma de promover a sua própria investigação, nem sugerir a rejeição do trabalho porque ele contradiz o seu próprio trabalho.</li></ol><p><strong>Depois agradece-se aos revisores que sigam os passos seguintes:</strong></p><p>1. Fornecer uma avaliação honesta e construtiva do valor do manuscrito.</p><p>2. Verificar se o estilo de escrita é:</p><ul><li>Claro: ideias escritas de forma direta e não ambígua.</li><li>Conciso: ausência de redundância, apresentação de palavras e frases que comunicam a ideia de forma simples.</li><li>Correto: gramática e pontuação precisas.</li></ul><p>3. Analisar os pontos fortes e fracos do estudo em cada secção do manuscrito. Por exemplo:</p><ul><li>Na <strong>Introdução</strong>, os autores fornecem uma linha de argumentação convincente, citam fontes importantes, focam em ideias (e não em factos ou descobertas discretas), e colocam questões ou hipóteses derivativas da teoria?</li><li>Nos <strong>Métodos</strong>, as estratégias são descritas claramente, a descrição da amostra apresenta detalhe suficiente, as medidas são bem operacionalizadas e têm características psicométricas apropriadas? Os métodos estatísticos são os mais adequados e estão bem justificados.</li><li>Os <strong>Resultados</strong> são apresentados de forma clara e seguem a ordem das perguntas de pesquisa? As tabelas ou figuras são necessárias e claras?</li><li>Na <strong>Discussão</strong>, os resultados são apresentados de forma concisa e precisa e representam os dados apresentados previamente? Os resultados são integrados no contexto de um debate teórico mais alargado, incluindo as referências revistas na introdução? Foi feito um esforço de ir para além dos factos e de apresentar explicações? As questões introdutórias estão respondidas? As limitações foram refletidas?</li></ul><p>4. Dar sugestões sobre como tornar o manuscrito mais completo, relevante e legível.</p><p>5. Fazer perguntas específicas aos autores por forma a que estes tornem o manuscrito mais relevante para o público-alvo, mas não fazer perguntas só porque são interessantes para o revisor, respeitando os objetivos e o desenho do estudo.</p><p>6. Confirmar as referências bibliográficas e indicar outras se tal for apropriado.</p><p>7. Indicar ao editor se:</p><ul><li>O manuscrito deve ser rejeitado na RPICS.</li><li>O manuscrito deve ser aceite condicionalmente.</li><li>O manuscrito deve ser aceite.</li></ul><p>Os membros do Corpo Editorial comprometem-se a efetuar 4 a 6 revisões anuais e a fazê-lo em tempo útil. Aqueles que consistentemente declinarem fazer revisões ou que o não façam dentro dos prazos são convidados a deixar o Corpo Editorial.</p><p>Todos os revisores serão pontuados pela qualidade e pela pontualidade (até 5 pontos). A alta qualidade e a oportunidade das opiniões são essenciais para a valorização da RPICS. Revisores que fazem análises de valor elevado de forma atempada estão a fornecer um serviço essencial à revista.</p><p><strong>Os revisores têm os seguintes direitos:</strong></p><ol><li>Ser informados da decisão do Editor sobre manuscritos que avaliaram para a RPICS.</li><li>Receber os comentários dos outros revisores para a sua própria edificação.</li><li>A lista dos membros do Conselho Editorial será publicada em cada edição da revista.</li><li>Os revisores que contribuam para a alta qualidade da revista (4-5 pontos) serão incluídos na lista de Revisores da RPICS na última edição do ano de publicação, podendo, ser convidados para o Corpo Editorial do ano seguinte.</li></ol><p>Os revisores são aconselhados a orientar-se pelas seguintes referências:</p><ol><li><a href="http://www.aepc.es/ijchp/ramos-es.pdf">Ramos-Alvarez, M. M., Moreno-Fernández, M. M., Valdés-Conroy, B. e Catena, A. (2008). Criteria of the peer-review process for publication of experimental and quasi-experimental research in Psychology: A guide for creating research papers.<em>International Journal of Clinical and Health Psychology, 8,</em> 751-764</a>.</li></ol><p> </p><p><strong>Fontes:</strong></p><p>Council on Scientific Editors Editorial Policy Statement appearing (2005). <em>Science, 25</em> (6). s.p.</p><p>Dembowski, F. L. (2010). Guidelines and advice to authors, editors and reviewers for professional journals and conference proposals.<em>International Journal of Organizational Innovation,</em> <em>s.v.,</em>1–53.</p></form>',
  ),
  'customAboutItems' => 
  array (
    'pt_PT' => 
    array (
      0 => 
      array (
        'title' => 'Tipos de Artigos',
        'content' => '<form><p>A RPICS publica três tipos de manuscritos: </p><p><strong>Investigação Original</strong>: Estes são artigos que descrevem investigação original de alta qualidade em temas sociais e comportamentais. <strong>Limites de palavras: </strong><em>7000</em>. <strong>Máximo de Referências:</strong> <em>50</em>.<strong> Requisito de Resumo:</strong> <em>Sim</em>.</p><p><strong>Revisão ou Metanálise</strong>: Estes artigos fornecem uma revisão sistemática ou metanalítica de um tema das ciências sociais ou comportamentais. Em circunstâncias excepcionais, estes manuscritos podem ultrapassar o tamanho especificado, mas isso deve ser negociado com os Editores no momento da apresentação. <strong> Limites de palavras</strong>: <em>9000.</em> <strong>Máximo de Referências</strong>: <em>100</em>. <strong>Requisito de Resumo</strong>: <em>Sim</em>.</p><p><strong>Carta ao editor</strong>: A carta ao editor pode ser enviada à RPICS para apresentar um ponto de vista sobre um assunto referente às áreas social e/ou comportamental, para explicar um tópico novo e relevante à comunidade científica ou para comentar, questionar ou criticar um artigo previamente publicado (ver informação adicional em <a href="/index.php/ISMT/about/editorialPolicies#custom-2">Correspondência Sobre Artigos Publicados</a>). <strong>Limites de palavras</strong>: <em>300.</em> <strong>Máximo de Referências</strong>: <em>5</em>. <strong>Requisito de Resumo</strong>: <em>Não</em>.</p></form>',
      ),
      1 => 
      array (
        'title' => 'Ética na Publicação',
        'content' => '<form><p>O trabalho descrito no seu manuscrito deve seguir o <a><em>Code of Ethics of the World Medical Association</em></a> (Declaração de Helsínquia) para estudos com seres humanos.</p><p>A RPICS atribui a maior importância à integridade ética dos seres humanos envolvidos nas investigações descritas. Nesse sentido, na secção "Métodos", os autores devem identificar a aprovação da comissão de ética e descrever que todos os sujeitos concordaram em participar no estudo e que assinaram uma declaração de consentimento livre e esclarecido. Os autores devem ainda descrever os métodos usados para avaliar a capacidade dos participantes entenderem e darem o seu consentimento informado, e as estratégias utilizadas no estudo para garantir a proteção do participantes.</p><p> </p><p>A RPICS defende seriamente a integridade na publicação e a sua reputação contra procedimentos condenáveis, tomando medidas contra a violação dos direitos de autor, plágio do trabalho de outros (direto, acidental ou em mosaico) ou auto-plágio. As medidas incluem:</p><p>• A verificação de queixas de plágio ou de uso incorreto de dados, métodos, etc.;</p><p>• A verificação de duplicação através de software apropriado;</p><p>• A deteção de plágio ou de inclusão de material com direitos autorais de terceiros envolverá: a publicação de um <em>erratum</em> ou <em>corrigendum</em>; remoção do artigo da RPICS; o contacto com o reitor ou diretor da instituição do autor e/ou instituições científicas; a não aceitação de qualquer outra submissão do(s) autor(es); e/ou o procedimento de ação legal.</p></form>',
      ),
      2 => 
      array (
        'title' => 'Autoria',
        'content' => '<p>A RPICS considera que um contribuinte num estudo é <em><strong>autor</strong></em> se obedecer aos seguintes critérios do <em>International Committee of Medical Journal Editors</em>:</p><p>• Contribuiu substancialmente para a concepção ou planeamento do estudo; ou recolheu, analisou, ou interpretou os dados para o estudo; E</p><p>• Esboçou a versão escrita original ou reviu criticamente importante conteúdo inteletual; E</p><p>• Aprovou a versão final a ser publicada; E</p><p>• Concordou em ser responsabilizado por todos os aspetos do trabalho, assegurando-se de que as questões relativos à correção ou integridade de todas as partes do trabalho foram investigadas e resolvidas adequadamente.</p><p> </p>',
      ),
      3 => 
      array (
        'title' => 'Correspondência sobre artigos publicados',
        'content' => '<p>Comentários, questões ou críticas sobre artigos publicados devem ser submetidos ao editor-chefe como <em>Carta ao editor</em> através do <a href="/index.php/ISMT/about/submissions">Sistema de Submsissão</a>. Este tipo de cartas devem focar em aspetos científicos, clínicos ou éticos dos artigos publicados. Os ataques pessoais aos autores não são aceites.</p><p>Os autores dos artigos discutidos na correspondência têm a  responsibilidade de responder aos comentários substanciais do relativos ao seu trabalho, usando o mesmo <a href="/index.php/ISMT/about/submissions">mecanism</a>o. A resposta será solicitada pelo/a editor/a. </p><p>Aos autores da correspondência solicita-se que declarem conflitos de interesses (incluindo relações financeiras, relações pessoais ou rivalidades, competição académica ou crenças intelectuais).</p><p>A correspondência sobre artigos publicados têm como limite as 300 palavras. </p>',
      ),
    ),
    'en_US' => 
    array (
      0 => 
      array (
        'title' => 'Types of manuscripts',
        'content' => '<form><p><span>The PJBSR publishes three types of manuscripts: </span></p><p><span><strong>Research</strong>: These are papers that describe original research of high quality on social and behavioral issues. <em><strong>Word limits</strong></em>: 7000. <em><strong>Maximum References</strong></em> 50. <em><strong>Abstract required:</strong></em> Yes</span></p><p><span><br /><strong>Review &amp; Meta-analysis</strong>: These papers provide an overview of a subject on social or behavioral sciences. In exceptional circumstances, these manuscripts may exceed the specified size, but this must be dealt with the editors at the time of presentation. <em><strong>Word limits</strong></em>: 9000. <em><strong>Maximum References</strong></em> 100. <em><strong>Abstract required</strong></em>: Yes</span></p><p><strong>Letter to editor</strong>: Letter to the editor may be sent to PJBSR to present a viewpoint about an issue concerning social and behavioral areas, to explain a new and relevant topic to the scientific community, or to comment, question, or criticize a previously published article (see more information in <a href="/index.php/ISMT/about/editorialPolicies#custom-2">Correspondence About Published P</a>apers). <em><strong>Word limits</strong></em> 300. <em><strong>Maximum References</strong></em> 5. <em><strong>Abstract required</strong></em> No.</p></form>',
      ),
      1 => 
      array (
        'title' => 'Publication Ethics',
        'content' => '<p><span>The work described in the manuscript must follow the <strong><em>Code of Ethics</em></strong> of the <em>World Medical Association</em> (Declaration of Helsinki) for human studies.</span></p><p><span>The <strong>PJSBR</strong> attaches great importance to the ethical integrity of human beings involved in the investigations. Accordingly, in the "Methods" section, authors should identify the approval of the ethics committee and describe that all subjects agreed to participate in the study and signed a free and informed consent. Authors should also describe the methods used to assess the participants\' ability to understand and give informed consent, and the strategies employed in the study to ensure the protection of participants.</span></p><p><span><br /></span></p><p><span>The PJBSR seriously defends the integrity in publication and its reputation against malpractice by taking action against infringement of copyright, plagiarism of the work of others (direct, accidental or mosaic) or self-plagiarism. The measures include:</span></p><p>• Verification of complaints of plagiarism or incorrect data use, methods, etc.;</p><p>• The potential verification of duplication with appropriate software;</p><p>• The detection of plagiarism or integration of third-party copyright material involve: publishing an erratum; removing the article from PJBSR; contact the head or director of the author\'s institution and/or other scientific institutions; not accepting any other submission from the author(s); and/or undertake legal action.</p>',
      ),
      2 => 
      array (
        'title' => 'Authorship',
        'content' => '<p>PJBSR considers that a contributor in a study is an <em><strong>author</strong></em> if he/her meets the following criteria of the<em> International Committee of Medical Journal Editors</em>:</p><p>• Substantial contributions to the conception or design of the work; or the acquisition, analysis, or interpretation of data for the work; AND<br />• Drafting the work or revising it critically for important intellectual content; AND<br />• Final approval of the version to be published; AND<br />• Agreement to be accountable for all aspects of the work in ensuring that questions related to the accuracy or integrity of any part of the work are appropriately investigated and resolved.</p><p> </p>',
      ),
      3 => 
      array (
        'title' => 'Correspondence about published articles',
        'content' => '<p>Comments, questions, or criticisms about published articles should be submited to editor-in-chief as a letter to editor through the <a href="/index.php/ISMT/about/submissions">Submission system</a>. These letters should focus on the scientific, clinical, or ethical aspects of the published papers, and personal attacks to the author/s are not accepted.</p><p>The authors of articles discussed in correspondence have a responsibility to respond to substantial criticisms of their work using the same <a href="/index.php/ISMT/about/submissions">mechanism</a>. The response would be asked by the editors.</p><p>Authors of correspondence would be asked to declare any competing or conflicting interests (financial relationships, personal relationships or rivalries, academic competition, and intellectual beliefs).</p><p>Correspondence about published articles has a limit of 300 words.</p><p> </p>',
      ),
    ),
  ),
  'readerInformation' => 
  array (
    'pt_PT' => '<p>Convidamos os leitores a registarem-se no serviço de notificação de publicação da revista. Clique em <a href="/index.php/ISMT/user/register">Registo</a> no menu superior da página. O registo permitirá ao leitor receber o Sumário via e-mail a cada nova edição. A lista procura também reivindicar um nível básico de apoio ou de leitura. Leia a <a href="/index.php/ISMT/about/submissions#privacyStatement">Política de Privacidade</a> da revista, que assegura aos leitores que os nomes e endereços fornecidos não serão utilizados para outros fins.</p>',
    'en_US' => '<p><span>We invite readers to register with the notification service journal publication. Click <a href="http://applewebdata//B16AAF9C-2E0E-4784-BD73-302088E46CB9/repositorio/index.php/DISS/user/register"><span>Register</span></a> in the top menu of the page. The registry will allow the reader receiving the Table of Contents by email for each new issue. The list also lay claim a basic level of support or readership. Read our<a href="http://applewebdata//B16AAF9C-2E0E-4784-BD73-302088E46CB9/repositorio/index.php/DISS/about/submissions%23privacyStatement"><span> Privacy Policy</span></a>, which assures readers that the names and addresses provided will not be used for other purposes.</span></p>',
  ),
  'authorInformation' => 
  array (
    'pt_PT' => '<p>Deseja enviar contribuições à revista? Convidamos todos a conferir a secção <a href="/index.php/ISMT/about">Sobre a Revista</a> e ler as políticas de secção, bem como as <a href="/index.php/ISMT/about/submissions#onlineSubmissions">Instruções para Autores</a>. É necessário que os autores se <a href="/index.php/ISMT/user/register">registem</a> no sistema antes de submeter um artigo; caso já tenha se registado basta <a href="/index.php/ISMT/login">aceder</a> ao sistema e iniciar o processo de 5 passos de submissão.</p>',
    'en_US' => '<p><span>Interested in submitting to this journal? We invite everyone to check out the <a href="http://applewebdata//B16AAF9C-2E0E-4784-BD73-302088E46CB9/repositorio/index.php/DISS/about"><span>About the Journal </span></a>section and reading section policies, as well as the <a href="http://applewebdata//B16AAF9C-2E0E-4784-BD73-302088E46CB9/repositorio/index.php/DISS/about/submissions%23authorGuidelines"><span>Instructions for Authors</span></a>. It is necessary for the authors to <a href="http://applewebdata//B16AAF9C-2E0E-4784-BD73-302088E46CB9/repositorio/index.php/DISS/user/register"><span>register</span></a> in the system prior to submitting, or if already registered simply <a href="http://applewebdata//B16AAF9C-2E0E-4784-BD73-302088E46CB9/repositorio/index.php/DISS/login"><span>access</span></a> the system and begin the 5 step process of submission.</span></p>',
  ),
  'homeHeaderTitle' => 
  array (
    'en_US' => 'Portuguese Journal of Behavioral and Social Research',
    'pt_PT' => 'Revista Portuguesa de Investigação Comportamental e Social',
  ),
  'metaTypeExamples' => 
  array (
    'pt_PT' => 'Investigação básica; Pesquisa aplicada; Estudo descritivo; Estudo correlacional; Estudo longitudinal; Estudo transversal; Plano causal; Plano de coorte; Plano experimental; plano exploratório',
    'en_US' => 'Basic Research, Applied Research, descriptive study, correlational study, longitudinal study, cross-sectional study, Causal design; cohort design; experimental design; exploratory design',
  ),
  'contactMailingAddress' => 
  array (
    'pt_PT' => '<script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">Revista Portuguesa de Investigação Comportamental e Social </span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">[Portuguese Journal of Behavioral and Social Sciences]</span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">Departamento de Investigação &amp; Desenvolvimento</span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">Instituto Superior Miguel Torga</span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">Rua Augusta, 46 </span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">3000-061 Coimbra</span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">PORTUGAL</span></p>',
    'en_US' => '<script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><strong><span style="-webkit-text-stroke-width: initial;">Departamento de Investigação &amp; Desenvolvimento</span></strong></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">Instituto Superior Miguel Torga</span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">Rua Augusta, 46 </span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">3000-061 Coimbra</span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">PORTUGAL</span></p>',
  ),
  'history' => 
  array (
    'pt_PT' => '<script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">A Revista Portuguesa de Investigação Comportamental e Social foi fundada em 2014.</span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">O primeiro número foi publicado em 2015.</span></p>',
    'en_US' => '<script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AdFox_getCodeScript = function() {};
AG_onLoad(function() { AG_each(\'iframe[id^="AdFox_iframe_"]\', function(el) { if (el && el.parentNode) { el.parentNode.removeChild(el); } }); });
try { Object.defineProperty(window, \'noAdsAtAll\', { get: function() { return true; } }); } catch (ex) {}
navigator.getBattery = undefined;
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; this.clickmap = noop; this.trackLinks = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">The Portuguese Journal of Behavioral and Social Research was founded in 2014.</span></p><p style="margin: 0px; font-size: 10px; line-height: normal; font-family: Optima; -webkit-text-stroke-color: #000000; -webkit-text-stroke-width: initial;"><span style="font-kerning: none;">The first number was published in 2015.</span></p>',
  ),
  'copyrightNotice' => 
  array (
    'pt_PT' => '<p>Os autores conservam os direitos de autor e concedem à revista o direito de primeira publicação, com o trabalho simultaneamente licenciado sob a <a style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px;" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons - Atribuição-NãoComercial 4.0 Internacional</a> que permite a partilha do trabalho com reconhecimento da autoria e publicação inicial nesta revista.</p><p> </p><p><a href="http://creativecommons.org/licenses/by-nc/4.0/" rel="license"><img style="border-width: 0;" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" alt="Licença Creative Commons" /></a></p>',
    'en_US' => '<p>The authors retain the copyright and grant the journal right of first publication with the work simultaneously licensed under the <a href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a> that allows the sharing of work and recognition of authorship and initial publication in this journal.</p><p> </p><p> </p><a href="http://creativecommons.org/licenses/by-nc/4.0/" rel="license"><img style="border-width: 0;" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" alt="Licença Creative Commons" /></a><br /><br />',
  ),
  'includeCopyrightStatement' => true,
  'licenseURL' => 'http://creativecommons.org/licenses/by-nc/4.0',
  'includeLicense' => true,
  'copyrightHolderType' => 'author',
  'copyrightYearBasis' => 'article',
  'searchKeywords' => 
  array (
    'pt_PT' => 'Psicologia; Serviço Social; Sociologia; Comportamento; Saúde mental; Família; idoso',
    'en_US' => 'psychology; mental health; social work; family',
  ),
  'lockssLicense' => 
  array (
    'pt_PT' => '<form><p>Esta revista utiliza o sistema LOCKSS para criar um sistema de arquivo distribuído entre as bibliotecas participantes e permite às mesmas criar arquivos permanentes da revista para a preservação e restauração. <a href="http://lockss.org/">Saiba mais...</a></p><p>Os outros arquivos incluem a <a href="http://porbase.bnportugal.pt/ipac20/ipac.jsp?session=14811220V66L5.349411&amp;profile=porbase&amp;uri=link=3100027~!10168045~!3100024~!3100022&amp;aspect=basic_search&amp;menu=search&amp;ri=3&amp;source=~!bnp&amp;term=Revista+portuguesa+de+investigação+comportamental+e+social+%5B+Recurso+eletrónico%5D&amp;index=ALTITLE">Porbase da Biblioteca Nacional de Portugal</a>, o <a href="https://www.rcaap.pt/repositoryInfo.jsp?id=RPICS">Repositório Científico de Acesso Aberto de Portugal</a> e o <a href="http://www.latindex.org/latindex/ficha?folio=24355">Latindex</a>.</p></form>',
    'en_US' => '<p>This journal utilizes the LOCKSS system to create an archiving system distributed among participating libraries and allows them to create permanent archives of the journal for the its preservation and restoration. <a href="http://lockss.org/">Know more...</a></p><p>The other archives include the <a href="http://porbase.bnportugal.pt/ipac20/ipac.jsp?session=14811220V66L5.349411&amp;profile=porbase&amp;uri=link=3100027~!10168045~!3100024~!3100022&amp;aspect=basic_search&amp;menu=search&amp;ri=3&amp;source=~!bnp&amp;term=Revista+portuguesa+de+investigação+comportamental+e+social+%5B+Recurso+eletrónico%5D&amp;index=ALTITLE">Porbase da Biblioteca Nacional de Portugal</a>, the <a href="https://www.rcaap.pt/repositoryInfo.jsp?id=RPICS">Repositório Científico de Acesso Aberto de Portugal</a>, and the <a href="http://www.latindex.org/latindex/ficha?folio=24355">Latindex</a>.</p>',
  ),
  'rtViewReviewPolicy' => true,
  'privacyStatement' => 
  array (
    'pt_PT' => '<p>Os nomes e endereços fornecidos nesta revista serão usados exclusivamente para os serviços prestados por esta publicação, não sendo disponibilizados para outras finalidades ou a terceiros.</p>',
    'en_US' => '<form><p><span>The names and addresses provided in this journal will be used exclusively for the services provided by this publication, not being available for other purposes or to third parties.</span></p></form>',
  ),
  'journalFavicon' => 
  array (
    'pt_PT' => 
    array (
      'name' => 'Captura de ecrã 2014-02-5, às 13.10.58.png',
      'uploadName' => 'journalFavicon_pt_PT.png',
      'width' => 328,
      'height' => 336,
      'mimeType' => 'image/png',
      'dateUploaded' => '2014-04-18 22:10:11',
    ),
  ),
  'submissionChecklist' => 
  array (
    'en_US' => 
    array (
      0 => 
      array (
        'order' => '1',
        'content' => '<p><span><strong>Submission of a manuscript implies the following conditions:</strong></span></p><p>That the work complied with the <a href="http://www.wma.net/en/30publications/10policies/b3/index.html.pdf?print-media-type&amp;footer-right=[page]/[toPage]">Helsinki Declaration of the World Medical Association,</a> which represents the international recommendations on clinical research, including ethical principles for clinical research involving human subjects, including research on identifiable human material and data.</p><p><span>• That the work has not been published previously (except in the form of an abstract, of a presentation at a scientific meeting, part of a published lesson, an academic thesis, or an electronic pre-press).</span></p><p><span>• That is not under review in another publication.</span></p><p><span>• That the publication has been approved by all authors and / or by the responsible authorities where the study took place.</span></p><p><span>• That is not subsequently published elsewhere, or in another similar version or in another language, without the consent of PJBSR.</span></p><p><span>In this respect, all authors must sign a Declaration and send it with the following content:</span></p><p><span>"I hereby declare that I have respected the Helsinki Declaration of the World Medical Association, which represents the international recommendations on clinical research, including ethical principles for clinical research involving human subjects, including research on identifiable human material and data. I declare that I have had a substantial contribution to the manuscript*. I declare that I approve the final version of the manuscript. I declare that the manuscript is not under review at any other journal, and has not been published in whole or in part in another journal. I declare that the manuscript has not been previously presented [If part has been presented elsewhere, indicate the page title the authors, dates, title, location, pages]. I declare that the article is original and that all statements presented as facts are based on authors research, that are responsible for them. I declare that the manuscript, either in part or in whole, does not infringe any copyright and do not violate any right of privacy. I declare that there is no conflict of interests from either of the authors. I declare that the authors submitting the work for publication, give <em>Portuguese Journal of Behavioral and Social Research</em> the right to the first publication of the article. [Following the signatures of all authors]"</span></p><p><span>* Criteria for the <span>authorship definition should be consulted in http://rpics.ismt.pt/index.php/ISMT/about/editorialPolicies#custom-2</span></span></p>',
      ),
      1 => 
      array (
        'order' => '2',
        'content' => '<p><span><strong>Preparation of the manuscript</strong></span></p><p><span>Manuscripts should follow the requirements set by the standards of APA Style ® detailed in the Publication Manual of the American Psychological Association (6th Ed.)</span></p><p><span>Editors and Reviewers give importance to clear and succinct writing style and well-organized tables. Statistical procedures should be explained clearly.</span></p>',
      ),
      2 => 
      array (
        'order' => '3',
        'content' => '<p><span><strong>Use of text editors</strong></span></p><p><span>The text should be written in a word processor with one column and the layout should be simple. Do not use tabs, alignment options or hyphenation and do not abuse of paragraphs or lists. Use, however, the bold, italic, subscript, index, etc.. Note that most of the formatting codes are removed. When preparing tables, if you use a table grid, use only one grid for each individual table and do not use a grid for each row. If you do not use a grid, use tabs, not spaces, to align columns. Avoid unnecessary errors using spell checkers and grammar.</span></p>',
      ),
      3 => 
      array (
        'order' => '4',
        'content' => '<p><span><strong>Cover Letter</strong></span></p><p><span>Each manuscript must be accompanied by a cover letter with a brief description of the article submission and its relevance to the likely readers of PJBSR.</span></p>',
      ),
      4 => 
      array (
        'order' => '5',
        'content' => '<p><span><strong>Title Page</strong></span></p><p><span>This page should be sent in a separate document and contain:</span></p><p>5.1. The title of the article that should be short, informative and contain the major keywords. Title must be in English and Portuguese.</p><p>5.2. A smaller title that will run as a header and must be less than 40 words.</p><p>5.3. The total word count</p><p>5.4. The names of the authors and the respective newer academic degrees.</p><p>5.5. The affiliation (respective institutions or place of employment) of each author.</p><p>5.6. The role of each author in performing the study</p><p>5.7. The name, address, phone, and e-mail of the author responsible for the correspondence and to whom requests for copies may be directed.</p>',
      ),
      5 => 
      array (
        'order' => '6',
        'content' => '<p><span><strong>Abstract</strong></span></p><p><span>The abstract should be subdivided into subheadings: Objective, Methods, Results, and Conclusions and should not exceed 300 words. <span>A Portuguese abstract should also be provided.</span></span></p><p><span><strong>Objectives</strong>: questions addressed; major goals.</span></p><p><span><strong>Methods</strong>: setting, context, sample, interventions (if any), the main outcome measures; for Reviews provide the data sources and the criteria for their selection.</span></p><p><span><strong>Results</strong>: main findings.</span></p><p><span><strong>Conclusions</strong>: only those related to the results, positive and negative, highlighting limitations if appropriate, and implications of the study; for Reviews write the main conclusions and implications for practice and research.The abstract should not contain abbreviations or references.</span></p>',
      ),
      6 => 
      array (
        'order' => '7',
        'content' => '<p><span><strong>Keywords</strong></span></p><p><span>List up to six keywords alphabetically after the abstract. These words should optimally characterize the work and facilitate either the choice of reviewer, or subsequent research of the article on the internet. For the behavioral sciences you can be guided by the MeSH (Medical Subject Headings) from the National Library of Medicine).</span></p><p><span>The last keyword should be the type of research methodology: theoretical study, descriptive study through observation, descriptive survey study, experiment, quasi-experiment, ex-post facto study, instrumental study, qualitative study, meta-analysis, or study review.</span></p><p><span><span>Keywords must be in English and Portuguese.</span><br /></span></p>',
      ),
      7 => 
      array (
        'order' => '8',
        'content' => '<p><span><strong>Structure of the Article</strong></span></p><p><span>The text should be divided into sections with the following main headings: <strong>Introduction</strong>, <strong>Methods</strong> (Sample, Instruments, Procedures, etc.), <strong>Results</strong>, <strong>Discussion/Conclusion</strong>, and <strong>References</strong>.</span></p><p><span>8.1. For <strong>Original papers</strong> (max. 7000 words*), the recommendations of the following authors can be followed:</span></p><p>• <a href="http://www.aepc.es/ijchp/articulos_pdf/ijchp-54.pdf"><span id="GRmark_5a5d91fd347b01c68fe297f8784968f90048246a_Bobenrieth:0" class="GRcorrect">Bobenrieth</span>, A. (2002). Normas para revisión de artículos originales en Ciencias de la Salud. <em>International Journal of Clinical and Health Psychology, 2, </em>509-523</a>.</p><p>• <a href="http://www.aepc.es/ijchp/articulos_pdf/ijchp-405_es.pdf">Hartley, J. (2012). New ways of making academic articles easier to read. <em>International Journal of Clinical and Health Psychology, 12, </em>143-160.</a></p><p>• <a href="http://cognition.uni-klu.ac.at/download/courses/Wilkinson%20(1999)%20Statistical%20Methods%20in%20Psychology%20Journals.pdf"><span id="GRmark_271dc4f1332409ff7ffb29e87e7d7996fcf8039c_Willkinson:0" class="GRcorrect">Willkinson</span>, L. (1999). Statistical Methods in Psychology Journals.<em> The American Psychologist, 54</em><span id="GRmark_d79eb19b03b7783ef05d0e6539e072f79ef8317a_(:0" class="GRcorrect">(</span>8), 594–604</a>.</p><p><span id="GRmark_f64ede6d42114d496bcc04ffb93b67b58da35717_In original articles,:0" class="GRcorrect">In original articles,</span><span> authors can use checklists for specific situations:</span></p><ul><li><p><span><a href="http://www.consort-statement.org/consort-statement/overview0/%23checklist"><span>CONSORT</span></a></span><span> checklist and flow diagram for randomized clinical trials </span></p></li><li><p><span><a href="http://www.stard-statement.org/"><span>STARD</span></a></span><span> checklist and flow diagram for studies of diagnostic accuracy</span></p></li><li><p><span><a href="http://www.strobe-statement.org/"><span>STROBE</span></a></span><span> for observational epidemiological studies</span></p></li></ul><p><span>8.2. Studies on </span><strong>measuring instruments</strong><span> are an original papers subtype and they should be divided into </span><em>Study Justification</em><span>, </span><em>Conceptual Definition of the construct</em><span>, </span><em>Qualitative Construction</em><span> and evaluation of the items, </span><em>Statistical analysis</em><span> of the items, </span><em>Internal Structure,</em><em>Test Reliability</em><span>, </span><em>Test Validity</em>&lt;&gt; and <em>Reliability</em><span>. This paper subtype could follow the following recommendations::</span></p><p>• <a href="http://www.aepc.es/ijchp/articulos_pdf/ijchp-158.pdf"><span id="GRmark_880a0494387eeb3a3d62bfcf131153f4b266d11e_Carretero:0" class="GRcorrect">Carretero</span>-Dios, H. &amp; Pérez, C. (2005). Normas para el desarrollo y revisión de estudios instrumentales. <em>International Journal of Clinical and Health Psychology, 5,</em> 521-551</a>.</p><p>• <a href="http://www.aepc.es/ijchp/carretero_es.pdf"><span id="GRmark_880a0494387eeb3a3d62bfcf131153f4b266d11e_Carretero:0" class="GRcorrect">Carretero</span>-Dios, H. &amp; Pérez, C. (2007). Standards for the development and the review of instrumental studies: Considerations about test selection in psychological research. <em>International Journal of Clinical and Health Psychology, 7,</em> 863-882.</a></p><p><span>8.3. The <strong>meta-analysis studies</strong> (max. 9000 words*), may follow the following recommendations:</span></p><p>• <a href="http://www.aepc.es/ijchp/articulos_pdf/ijchp-185.pdf"><span id="GRmark_cb5ad6ad816d2378121d06cd7141dd032d8e69e4_Botella:0" class="GRcorrect">Botella</span>, J. <span id="GRmark_22fe8378e5c276f32de3bc7ef7df94a4ff406176_e:0" class="GRcorrect">e</span> Gambara, H. (2006). Doing and reporting <span id="GRmark_224e2bf29194b21fa4c07177bc3b5e1ded2ac1a5_an:0" class="GRcorrect">an</span> meta-analysis. International Journal of Clinical and Health Psychology, 6, 425-440</a>.</p><p>• <a href="http://www.informaworld.com/index/921284391.pdf">Cafri, G., &amp; Kromrey, J. D. (2010). A Meta-Meta-Analysis: Empirical Review of Statistical Power, Type I Error Rates, Effect Sizes, and Model Selection of Meta-Analyses Published in Psychology. <em>Multivariate Behavioral Research, 45</em><span id="GRmark_9ea838db5ca5be9521dc422df0384d005862bdfb_(:0" class="GRcorrect">(</span>2), 239–270</a>.</p><p>• <a href="http://onlinelibrary.wiley.com/doi/10.1002/9780470712184.ch9/summary">Deeks, J. J., Higgins, J., &amp; Altman, D. G. (2008). <span id="GRmark_feb747dab5b59ff51918bb15dbcf88c494aa5a37_Analysing:0" class="GRcorrect">Analysing</span> Data and Undertaking Meta‐Analyses. <span id="GRmark_e715e1516b3951d0d08142d55116b7141c65abb3_Em:0" class="GRcorrect">Em</span> J. P. T. Higgins &amp; S. Green (Eds.), <em>Cochrane Handbook for Systematic Reviews of Interventions: Cochrane Book Series</em> (pp. 243–296). Wiley Online Library</a>.</p><p><span>On meta-analysis </span><span>articles, the authors can use the following checklists:</span></p><ul><li><p><span><a href="http://www.consort-statement.org/mod_product/uploads/MOOSE%20Statement%202000.pdf"><span>MOOSE</span></a></span><span> checklist and flow diagram for meta-analysis</span></p></li><li><p><span><a href="http://www.prisma-statement.org/"><span>PRISMA</span></a></span><span> checklist and flow diagram for meta-analysis</span></p></li></ul><p><span>8.4. <strong>Review studies</strong> (max. 9000 words*) may follow the following recommendations:</span></p><p>• <a href="http://www.aepc.es/ijchp/articulos_pdf/ijchp-158.pdf"><span id="GRmark_880a0494387eeb3a3d62bfcf131153f4b266d11e_Carretero:0" class="GRcorrect">Carretero</span>-Dios, H. &amp; Pérez, C. (2005). Normas para el desarrollo y revisión de estudios instrumentales. <em>International Journal of Clinical and Health Psychology, 5,</em> 521-551.</a></p><p>• Sampaio, R. F., &amp; Mancini, M. C. (2007). <span id="GRmark_09fd159aef60dcd501f265ff16e1cde38edaa71e_Estudos:0" class="GRcorrect">Estudos</span> <span id="GRmark_09fd159aef60dcd501f265ff16e1cde38edaa71e_de:1" class="GRcorrect">de</span> revisão sistemática: um <span id="GRmark_09fd159aef60dcd501f265ff16e1cde38edaa71e_guia:2" class="GRcorrect">guia</span> para síntese <span id="GRmark_09fd159aef60dcd501f265ff16e1cde38edaa71e_criteriosa:3" class="GRcorrect">criteriosa</span> <span id="GRmark_09fd159aef60dcd501f265ff16e1cde38edaa71e_da:4" class="GRcorrect">da</span> evidência científica; Systematic review studies: a guide for careful synthesis of the scientific evidence. <em>Revista Brasileira de Fisioterapia, 11</em>(1), 83–89.</p><p><span><span id="GRmark_108699065067343bf21df2b4b90fef0abe560e44_In review articles,:0" class="GRcorrect">In review articles,</span></span><span> authors can use the following checklist:</span></p><ul><li><p><span><a href="http://www.prisma-statement.org/"><span>PRISMA</span></a></span><span> flowchart and checklist for systematic reviews</span></p></li></ul><p><span>All pages should be numbered. The total word count includes all text in the article body (excluding the two abstracts, the references, the figures, and the charts).</span></p><p><span>* These limits could be exceeded if adequately<em class="example"> </em>justified.</span></p>',
      ),
      8 => 
      array (
        'order' => '9',
        'content' => '<p><span><strong>Statistical Analysis</strong></span></p><p><span>Prove that the statistical procedures used were appropriate to test the hypotheses of the study, and were also correctly interpreted. Levels of statistical significance (e.g., <em>p</em> &lt; 0.05, <em>p</em> &lt; 0.01, <em>p</em> &lt; 0.001) should be mentioned, or, if applicable, confidence intervals (non-random sampling). The Effects size should always be given (e.g., Cohen\'s <em>d</em>, Hedges <em>g</em>, Eta Square, Size Effect of Correlation).</span></p>',
      ),
      9 => 
      array (
        'order' => '10',
        'content' => '<p><span><strong>Abbreviations</strong></span></p><p><span>The abbreviations should be avoided. If you must, then indicate in the text at the time of its first use, then do not repeat the full name.</span></p>',
      ),
      10 => 
      array (
        'order' => '11',
        'content' => '<p><span><strong>Tables</strong></span></p><p><span>Send each table in a separate document. Number each table consecutively with Arabic numerals in the order they are mentioned in the text and label them properly. When they are mentioned in the text, do not duplicate information. The tables, their titles and their footnotes should be self-explanatory and not exceed one page. The pattern of the symbols used in the footnote is as follows: *, **, ***, †, † †, † † †, ‡, ‡ ‡, ‡ ‡ ‡. Refer to the APA rules for formatting.</span></p>',
      ),
      11 => 
      array (
        'order' => '12',
        'content' => '<p><span><strong>Figures and charts</strong></span></p><p><span>Send each individual document and illustration in JPG (high resolution - 300 dpi). Captions should come in a separate word document. Number each illustration consecutively with Arabic numerals in the order they are mentioned in the text and label them properly. Figures from other works must be accompanied by written permission of the authors.</span></p>',
      ),
      12 => 
      array (
        'order' => '13',
        'content' => '<p><span><strong>References</strong></span></p><p><span>Do not include unpublished references. <span>Cited references in another language than English should be</span><span>translated to English (see example below). </span>The maximum number of references is 50 for original articles and 100 for review/meta-analysis articles. The use of computer programs for management and formatting references are recommended, such as <em>EndNote</em> or <em>Papers</em>. The format followed by PJBSS is indicated by the APA. </span></p><p><span><em>Examples</em></span></p><p>13.1.<em> Chapter Book: </em>Cunha, M. (2003).<em> </em>Estratégias de avaliação clínica na fobia social [Strategies for clinical evaluation in social phobia]. In J. P. Gouveia (Ed.). <em>Ansiedade social: Da timidez à fobia social</em> (pp. 181-236). Coimbra: Quarteto.</p><p>13.2.<em> Journal Article:</em> Daniel, F. e Filipe, A. (2010). <em>O corpo adolescente: contributos para a compreensão da sua representação</em> [The adolescent body: Contribution to the understanding to its representation]. <em>Psychologica</em>, <em>52</em>, 71-90.</p><p>13.3.<em> Electronic publications, organizational Author:</em> World Health Organization. (2009). <em>Diabetes Programme.</em> Accessed 1 May 2009 in <a href="http://www.who.int/diabetes/facts/en/index.html">http://www.who.int/diabetes/facts/en/index.html</a></p><p>13.4.<em> Theses and Dissertations:</em> Barata, M. J. (2012). <em>Identidade, autodeterminação e Relações internacionais: O caso do Saara Ocidental</em> [Identity, self-determination, and International Relations: The case of Western Sahara]. Doctoral dissertation, University of Coimbra, Coimbra.</p>',
      ),
      13 => 
      array (
        'order' => '14',
        'content' => '<p><span><strong>Acknowledgements</strong></span></p><p><span>At the end of the manuscript you can acknowledge the cooperation of individuals, groups or institutions (for financial support, for support in data collection, technical assistance, etc..), and that they have not justified their inclusion as authors.</span></p>',
      ),
      14 => 
      array (
        'order' => '15',
        'content' => '<p><span><strong>Reviewers suggestion</strong></span></p><p><span>Submit, finally, a word document with the names of four referees. These reviewers can not work at the same institution / department, have close relationships or have published as co-author of any of the authors. Provide the name, institution and email address of each potential reviewer. Suggestions for reviewers do not guarantee that they will be, in fact, the reviewers of the article.</span></p>',
      ),
    ),
    'pt_PT' => 
    array (
      0 => 
      array (
        'order' => '1',
        'content' => '<form><p><strong>A submissão de um manuscrito implica as seguintes condições: </strong></p><ul><li><p>que o trabalho respeitou a <a href="http://www.wma.net/en/30publications/10policies/b3/index.html.pdf?print-media-type&amp;footer-right=[page]/[toPage]">Declaração de Helsínquia da Associação Médica Mundial</a>, que traduz as recomendações internacionais sobre investigação clínica, nomeadamente os princípios éticos para a investigação clínica envolvendo seres humanos, incluindo a investigação sobre dados e material humano identificáveis</p></li><li><p>que o trabalho não tenha sido publicado previamente (exceto na forma de um resumo, de uma apresentação num encontro científico, de parte de uma lição publicada, de uma tese académica, ou de uma pré-impressão eletrónica)</p></li><li><p>que não esteja em análise noutra publicação</p></li><li><p>que a publicação tenha sido aprovada por todos os autores e/ou pelas autoridades responsáveis onde o estudo ocorreu</p></li><li><p>que não seja publicado posteriormente noutro local, nem em outra versão semelhante, nem em outra língua, sem o consentimento da RPICS</p></li></ul><p>Neste sentido todos os autores devem assinar uma <strong>Declaração</strong> e enviá-la com o seguinte conteúdo:</p><p>"Declaro que respeitei a Declaração de Helsínquia da Associação Médica Mundial que traduz as recomendações internacionais sobre investigação clínica, nomeadamente os princípios éticos para a investigação clínica envolvendo seres humanos, incluindo a investigação sobre dados e material humano identificáveis. Declaro que tive uma contribuição substancial para o manuscrito*. Declaro que aprovo a versão final do manuscrito. Declaro que o manuscrito não está sob revisão em qualquer outra revista, e que não foi publicado em parte ou no todo noutra revista. Declaro que o manuscrito não foi apresentado anteriormente [Se parte já foi apresentado noutro local, indique na página de titulo os autores, datas, título, local, páginas]. Declaro que o artigo é original e que todas as afirmações apresentadas como factos são baseados na investigação dos Autores, que se responsabilizam por elas. Declaro que o manuscrito, quer em parte quer no todo, não infringe nenhum <em>copyright</em> e não viola nenhum direito da privacidade. Declaro que não existe, da parte de qualquer dos Autores, conflito de interesses. Declaro que os Autores, ao submeterem o trabalho para publicação, concedem à <em>Revista Portuguesa de Investigação Comportamental e Social </em>o direito de primeira publicação do artigo. [Seguem-se as assinaturas de todos os autores]" </p><p>* Os critérios para a definição de Autoria devem ser consultados em http://rpics.ismt.pt/index.php/ISMT/about/editorialPolicies#custom-2</p></form>',
      ),
      1 => 
      array (
        'order' => '2',
        'content' => '<p><strong>Preparação do manuscrito</strong></p><p>Os manuscritos devem seguir os requisitos indicados pelas normas da APA Style® detalhadas no <em>Publication Manual of the American Psychological Association</em> (6ª Ed.) e seguir o <a href="http://www.portaldalinguaportuguesa.org/acordo.php">Acordo Ortográfico da Língua Portuguesa</a> (1990). Os artigos em língua inglesa devem seguir as regras gramaticais apropriadas. Os Editores e Revisores dão importância a estilo de escrita sucinta e clara e a tabelas bem organizadas. Os procedimentos estatísticos devem ser explicados claramente.</p>',
      ),
      2 => 
      array (
        'order' => '3',
        'content' => '<p><strong>Uso de processadores informáticos de texto</strong></p><p>O texto deve ser escrito no processador Word a uma coluna e o esquema deve ser simples. Não use tabulações, opções de alinhamento ou hifenização e não abuse de parágrafos ou listagens. Use, no entanto, o negrito, itálico, expoente, índice, etc. Note que a maior parte dos códigos de formatação serão removidos. Quando preparar as tabelas, se usar a grade de tabela, use somente uma grelha para cada tabela individual e não uma grelha para cada linha. Se não usar grelha, use as tabulações, e não espaços, para alinhar as colunas. Evite erros desnecessários, usando corretores ortográficos e gramaticais.</p>',
      ),
      3 => 
      array (
        'order' => '4',
        'content' => '<p><strong>Carta de Apresentação</strong></p><p>Cada manuscrito deve ser acompanhado por uma carta de apresentação com uma breve descrição do artigo em submissão e da sua relevância para os leitores prováveis da RPICS.</p>',
      ),
      4 => 
      array (
        'order' => '5',
        'content' => '<form><p><strong>Página de Título</strong></p><p>Esta página deve vir em documento em separado e deve conter:</p><p>5.1. O título do artigo que deverá ser curto, informativo e conterá as principais palavras-chave. O título deve ser escrito em Português e em Inglês.</p><p>5.2. Um título menor que servirá de cabeçalho e deverá ter menos de 40 palavras.</p><p>5.3. A contagem total de palavras.</p><p>5.4. Os nomes dos autores e respetivos graus académicos mais recentes.</p><p>5.5. Afiliação (instituições respetivas ou local de emprego).</p><p>5.6. Papel de cada autor na realização do trabalho.</p><p>5.7. O nome, endereço, telefone e e-mail do autor responsável pela correspondência.</p></form>',
      ),
      5 => 
      array (
        'order' => '6',
        'content' => '<p><strong>Resumo</strong></p><p>O resumo deve ser subdividido nos subtítulos Objetivo, Métodos, Resultados e Conclusões e não devem ultrapassar as 300 palavras. O resumo deve ser fornecido também em Inglês.</p><p><strong>Objetivos</strong>: questões abordadas; principais objetivos</p><p>Método: configuração, contexto, amostra, intervenções (se for o caso), medidas de resultados principais; para revisões forneça as fontes de dados e os critérios para a sua seleção.</p><p><strong>Resultados</strong>: principais achados.</p><p><strong>Conclusões</strong>: apenas as que se relacionam com os resultados, positivos e negativos, destacando limitações se for apropriado, e implicações do estudo; para revisões escreva as conclusões principais e as implicações práticas e de pesquisa.</p><p>O resumo não deve conter abreviaturas ou referências bibliográficas.</p>',
      ),
      6 => 
      array (
        'order' => '7',
        'content' => '<p><strong>Palavras-chave</strong></p><p>Listar até seis palavras-chave por ordem alfabética depois do resumo. Estas palavras devem caracterizar optimalmente o trabalho e facilitar, quer a escolha do revisor, quer a pesquisa posterior do artigo na internet. Para as ciências comportamentais pode guiar-se pela tradução do MeSH (<em>Medical Subject Headings) da National Library of Medicine) </em>feita pela brasileira <a href="http://decs.bvs.br">Bireme</a> ou pelos <a href="http://www.unesco.org/education/aladin/BasicALADINKeywords.htm">descritores da UNESCO.</a> A última palavra-chave deve ser o tipo de metodologia de pesquisa: estudo teórico, estudo descritivo através da observação, estudo de levantamento descritivo, experiência, quase-experiência, estudo <em>ex-post </em>facto, estudo instrumental, estudo qualitativo, meta-análise ou estudo de revisão.</p><p>As palavras-chave devem também ser fornecidas em Inglês.</p>',
      ),
      7 => 
      array (
        'order' => '8',
        'content' => '<p><strong>Estrutura do artigo</strong></p><p>Todas as páginas devem ser numeradas. A contagem total de palavras inclui todo o texto do corpo do artigo (excluindo os dois resumos, as referências, as figuras e gráficos).</p><p>O texto deve ser dividido em secções com os seguintes títulos principais: <strong>Introdução, Método</strong> (<em>Amostra</em>, <em>Instrumentos</em>, <em>Procedimentos</em>, etc.), <strong>Resultados</strong> e <strong>Discussão/Conclusão </strong>e <strong>Referências</strong>.</p><p>8.1. Para <strong>artigos originais</strong> (até 7000* palavras), podem ser seguidas as recomendações dos seguintes autores:</p><p>• <a href="http://www.aepc.es/ijchp/articulos_pdf/ijchp-54.pdf">Bobenrieth, A. (2002). Normas para revisión de artículos originales en Ciencias de la Salud.<em>International Journal of Clinical and Health Psychology, 2,</em> 509-523</a>.</p><p>• <a href="http://www.aepc.es/ijchp/articulos_pdf/ijchp-405_es.pdf">Hartley, J. (2012). New ways of making academic articles easier to read. <em>International Journal of Clinical and Health Psychology, </em>12, 143-160.</a></p><p>• <a href="https://www.apa.org/science/leadership/bsa/statistical/tfsi-followup-report.pdf">Willkinson, L. (1999). Statistical methods in psychology journals. <em>The American Psychologist</em>, <em>54</em>(8), 594–604</a>.</p><p>Nos artigos originais, os autores podem utilizar listas de verificação (<em>checklists</em>) para situações específicas:</p><p>• <a href="http://www.consort-statement.org/consort-statement/overview0/%23checklist">CONSORT</a> checklist e fluxograma para ensaios clínicos aleatorizados.</p><p>• <a href="http://www.stard-statement.org">STARD</a> checklist e fluxograma para estudos de precisão diagnóstica.</p><p>• <a href="http://www.strobe-statement.org/">STROBE</a> para estudos observacionais epidemiológicos</p><p>8.2. Os estudos sobre <strong>instrumentos de medida </strong>são um subtipo dos Artigos originais que podem ser divididos em <em>Justificação do estudo</em>, <em>Definição concetual do construto</em>, <em>Construção e avaliação qualitativa dos itens</em>, <em>Análise estatística dos itens</em>, <em>Consistência interna, Consistência temporal, Confiabilidade interjuízes, Forma alternativa, Validade convergente e Validade Interna</em>. Este subtipo de artigo pode seguir as recomendações seguintes:</p><p>• <a href="http://www.aepc.es/ijchp/articulos_pdf/ijchp-158.pdf">Carretero-Dios, H. e Pérez, C. (2005). Normas para el desarrollo y revisión de estudios instrumentales.<em>International Journal of Clinical and Health Psychology,</em>5, 521-551</a>.</p><p>• <a href="http://www.aepc.es/ijchp/carretero_es.pdf">Carretero-Dios, H. e Pérez, C. (2007). Standards for the development and the review of instrumental studies: Considerations about test selection in psychological research. <em>International Journal of Clinical and Health Psychology, 7, </em>863-882.</a></p><p>8.3. Os estudos de <strong>meta-análise </strong>(até 9000 palavras*) podem seguir as recomendações seguintes:</p><p>• <a href="http://www.aepc.es/ijchp/articulos_pdf/ijchp-185.pdf">Botella, J. e Gambara, H. (2006). Doing and reporting an meta-analysis. <em>International Journal of Clinical and Health Psychology, 6, </em>425-440</a>.</p><p>• <a href="http://www.informaworld.com/index/921284391.pdf">Cafri, G., e Kromrey, J. D. (2010). A Meta-Meta-Analysis: Empirical Review of Statistical Power, Type I Error Rates, Effect Sizes, and Model Selection of Meta-Analyses Published in Psychology. <em>Multivariate Behavioral Research</em>, <em>45</em>(2), 239–270</a>.</p><p>• <a href="http://onlinelibrary.wiley.com/doi/10.1002/9780470712184.ch9/summary">Deeks, J. J., Higgins, J., e Altman, D. G. (2008). Analysing Data and Undertaking Meta‐Analyses. Em J. P. T. Higgins &amp; S. Green (Eds.), <em>Cochrane Handbook for Systematic Reviews of Interventions: Cochrane Book Series</em> (pp. 243–296). Wiley Online Library</a>.</p><p>Nos artigos de meta-análise, os autores podem utilizar as listas de verificação (<em>checklists</em>) seguintes:</p><p>• <a href="http://www.consort-statement.org/mod_product/uploads/MOOSE%20Statement%202000.pdf">MOOSE</a> checklist e fluxograma para meta-análise.</p><p>• <a href="http://www.prisma-statement.org">PRISMA</a> checklist e fluxograma para meta-análise.</p><p>8.4. Os estudos de <strong>revisão</strong> (até 9000 palavras*) poderão seguir as recomendações seguintes:</p><p>• <a href="http://www.aepc.es/ijchp/articulos_pdf/ijchp-158.pdf">Carretero-Dios, H. e Pérez, C. (2005). Normas para el desarrollo y revisión de estudios instrumentales. <em>International Journal of Clinical and Health Psychology, </em>5, 521-551.</a></p><p>• Sampaio, R. F., e Mancini, M. C. (2007). Estudos de revisão sistemática: um guia para síntese criteriosa da evidência científica; Systematic review studies: a guide for careful synthesis of the scientific evidence. <em>Revista Brasileira de Fisioterapia</em>, <em>11</em>(1), 83–89.</p><p>Nos artigos de revisão, os autores podem utilizar a lista de verificação (<em>checklist</em>) seguinte:</p><p>• <a href="http://www.prisma-statement.org">PRISMA</a><span style="letter-spacing: 0.0px;"> checklist e fluxograma para revisões sistemáticas</span></p><p>* Estes limites poderão ser ultrapassados se devidamente justificados.</p><p> </p>',
      ),
      8 => 
      array (
        'order' => '9',
        'content' => '<p><strong>Análise Estatística</strong></p><p>Demonstre que os procedimentos estatísticos utilizados foram apropriados para testar as hipóteses do estudo, e que foram também corretamente interpretados.</p><p>Os <em>Níveis de Significância Estatística</em> (p.e., <em>p </em>&lt; 0,05; <em>p </em>&lt; 0,01;<em> p </em>&lt; 0,001) devem ser mencionados, ou, caso se aplique, os <em>Intervalos de Confiança</em> (amostragem não aleatória).</p><p>O <em>Tamanho do Efeito </em>deve ser sempre indicado (p.e.,<em> d</em> de Cohen, <em>g</em> de Hedges, Eta Quadrado, Tamanho do Efeito da Correlação). Para o seu cálculo e interpretação, podem ser seguidas as recomendações expressas no seguinte artigo: </p><p><a href="/index.php/ISMT/article/view/14/9" target="_blank"><span>Espirito Santo, H., &amp; Daniel, F. (2015). Calcular e apresentar tamanhos do efeito em trabalhos científicos (1): As limitações do <em>p</em> &lt; 0,05 na análise de diferenças de médias de dois grupos. </span><em>Revista Portuguesa de Investigação Comportamental e Social, 1</em><span>(1), 3-16. doi:</span></a><a href="http://dx.doi.org/10.7342/ismt.rpics.2015.1.1.14">10.7342/ismt.rpics.2015.1.1.14</a></p>',
      ),
      9 => 
      array (
        'order' => '10',
        'content' => '<p><strong>Abreviaturas</strong></p><p>As abreviaturas devem ser evitadas. Se o tiver de fazer, então indique no texto no momento da sua primeira utilização, depois não repita o nome por extenso.</p>',
      ),
      10 => 
      array (
        'order' => '11',
        'content' => '<p><strong>Tabelas e Quadros</strong></p><p>Use as tabelas para apresentar dados numéricos e os quadros para informação textual. Coloque cada tabela/quadro imediatamente a seguir à sua indicação no texto (p.e., Tabela 1). Numere cada tabela/quadro consecutivamente com algarismos árabes, na ordem em que são referidos no texto e legendadas devidamente. Ao serem referidos no texto, não duplique a informação. As/Os tabelas/quadros, seus títulos e seus rodapés devem ser auto-explicativos e não podem ultrapassar uma página. O padrão dos símbolos usados em rodapé é o seguinte: *, **, ***, †, ††, †††, ‡, ‡‡, ‡‡‡. Consulte as normas da APA para a formatação.</p>',
      ),
      11 => 
      array (
        'order' => '12',
        'content' => '<p><strong>Figuras e gráficos</strong></p><p>Envie cada ilustração em documento individual e em formato JPG (alta resolução — 300 dpi). As legendas devem vir num documento word em separado. Numere cada ilustração consecutivamente com algarismos árabes, na ordem em que são referidos no texto e legendadas devidamente. Figuras de outros trabalhos devem vir acompanhadas de permissão escrita dos seus autores.</p>',
      ),
      12 => 
      array (
        'order' => '13',
        'content' => '<p><strong>Referências</strong></p><p>Não inclua referências não publicadas. As referências de uma outra língua que não o Inglês devem ser traduzidas para Inglês (veja exemplos abaixo). O número máximo de referências é de 50 para os artigos originais e de 100 para os artigos de revisão/metanálise. O uso de programas informáticos para gestão de referências e sua formatação são recomendados, como por exemplo o Papers ou o EndNote®. O formato seguido pela RPICS é o indicado pela APA.</p><p><em>Exemplos</em></p><p><em></em><strong>13.1.<em> Capítulo de livro</em>:</strong> Cunha, M. (2003). Estratégias de avaliação clínica na fobia social [Strategies for clinical evaluation in social phobia]. Em J. P. Gouveia (Ed.).<em> Ansiedade social: Da timidez à fobia social</em> [<em>Social anxiety: From shyness to social phobia</em>] (pp. 181-236). Coimbra: Quarteto.</p><p><strong>13.2<em> Artigo de Revista</em>:</strong> Daniel, F. e Filipe, A. (2010). O corpo adolescente: contributos para a compreensão da sua representação [The adolescent body: Contribution to the understanding to its representation]. <em>Psychologica, 52,</em> 71-90.</p><p><strong>13.3.<em> Publicações eletrónicas, autor organizacional:</em></strong> World Health Organization. (2009). Diabetes programme. Acedido em 1, maio, 2009, em http://www.who.int/diabetes/facts/en/index.html</p><p><strong>13.4.<em> Teses e Dissertações:</em></strong> Barata, M. J. (2012). <em>Identidade, autodeterminação e Relações internacionais: O caso do Saara Ocidental </em> [Identity, self-determination, and International Relations: The case of Western Sahara]<em>.</em> Dissertação de doutoramento, Universidade de Coimbra, Coimbra.</p>',
      ),
      13 => 
      array (
        'order' => '14',
        'content' => '<p><strong>Agradecimentos</strong></p><p>No final do manuscrito pode reconhecer a colaboração de pessoas, grupos ou instituições (por apoio financeiro, por apoio na recolha de dados, auxílio técnico, etc.), e que não têm justificadas as suas inclusões como autores.</p>',
      ),
      14 => 
      array (
        'order' => '15',
        'content' => '<p><strong>Sugestão de revisor</strong></p><p>Envie, finalmente, um documento em word com os nomes de quatro revisores. Estes revisores não podem trabalhar na mesma instituição/departamento, ter relações próximas ou ter publicado como co-autor de qualquer um dos autores. Indique o nome, a instituição e o endereço electrónico de cada revisor potencial. As sugestões para os revisores não garantem que eles venham a ser, de facto, os revisores do artigo.</p>',
      ),
    ),
  ),
  'purchaseIssueFeeEnabled' => false,
  'purchaseIssueFee' => 0,
  'acceptGiftSubscriptionPayments' => false,
  'focusScopeDesc' => 
  array (
    'pt_PT' => '<p>A <strong><em>Revista Portuguesa de Investigação Comportamental e Social </em></strong>publica artigos de investigação empirica com metodologias quantitativas e artigos de revisão, nas áreas das Ciências Comportamentais e Sociais.</p><p>Aceita a submissão de artigos de especialistas e investigadores, nacionais e internacionais (em português, inglês ou espanhol), com particular ênfase na investigação sobre processos emocionais, dimensões neuropsicológicas, processos sociais ao longo do ciclo vital, programas e processos terapêuticos, psicometria e temas relacionados com a sociedade, valores, identidades e relacões sociais.</p><p>Os trabalhos de investigação de Países de Língua Portuguesa são especialmente bem vindos.</p>',
    'en_US' => '<form><p>The <strong>Portuguese Journal of Social and Behavioral Research</strong> publishes empirical research articles with quantitative methodologies and review papers in the areas of Behavioral and Social Sciences.</p><p>Accepts the submission of papers from experts and researchers, national and international (in Portuguese, English, or Spanish), with particular emphasis on research on emotional processes, neuropsychological dimensions, social processes throughout the life cycle, programs and therapeutic processes, psychometrics and themes related to society, values, identities and social relations.</p><p>The research work of Portuguese Language Countries are especially welcome.</p></form>',
  ),
  'navItems' => 
  array (
    'en_US' => 
    array (
      0 => 
      array (
        'name' => 'Editorial Team',
        'isLiteral' => '1',
        'url' => '/index.php/ISMT/about/editorialTeam',
      ),
      1 => 
      array (
        'name' => 'Acknowledgments',
        'isLiteral' => '1',
        'url' => '/index.php/ISMT/pages/view/grata',
      ),
      2 => 
      array (
        'name' => 'Submissions',
        'isLiteral' => '1',
        'url' => '/index.php/ISMT/about/submissions',
      ),
    ),
    'pt_PT' => 
    array (
      0 => 
      array (
        'name' => 'Equipa Editorial',
        'isLiteral' => '1',
        'url' => 'http://rpics.ismt.pt/index.php/ISMT/about/editorialTeam',
        'isAbsolute' => '1',
      ),
      1 => 
      array (
        'name' => 'Agradecimentos',
        'isLiteral' => '1',
        'url' => 'http://rpics.ismt.pt/index.php/ISMT/pages/view/grata',
        'isAbsolute' => '1',
      ),
      2 => 
      array (
        'name' => 'Submissões',
        'isLiteral' => '1',
        'url' => 'http://rpics.ismt.pt/index.php/ISMT/about/submissions',
        'isAbsolute' => '1',
      ),
    ),
  ),
  'publicationFeeDescription' => 
  array (
    'en_US' => 'Authors do not have to pay for publication of papers.',
    'pt_PT' => 'Os autores não têm de pagar qualquer taxa para publicação dos artigos.',
  ),
  'purchaseArticleFeeDescription' => 
  array (
    'pt_PT' => 'Os leitores não têm de pagar para ler os artigos.',
  ),
  'publicationFeeName' => 
  array (
    'en_US' => 'Article Publication',
    'pt_PT' => 'Publicação de Artigo',
  ),
  'authorGuidelines' => 
  array (
    'en_US' => '<p><span>The acceptance criteria for the papers are the quality and originality of the research, these parameters being assessed first by the Editors. If indicated, the papers are assigned to the Associate Editor or to the Guest Editor who will coordinate the peer review process, which usually involves finding two experts referees.</span></p><p><span>The Editorial Board reserves the right to refuse material for publication, the opinion being communicated within a month. The Editor is responsible for the final decision on acceptance or rejection. Unless so stated, material in this journal do not necessarily reflect the opinion of the Editors or DI&amp;D. The editors are not responsible for any errors or omissions or by any fact. The <em>Portuguese Journal of Behavioral and Social Research</em> gives priority to research articles, but also accepts other types of manuscripts. </span></p><p><span>See <a href="/index.php/ISMT/about/editorialPolicies#custom-0"><span>Types of Papers</span></a> for more information.</span></p><p><span>Manuscripts should follow the requirements stated by the rules of APA Style ® detailed in the Publication Manual of the American Psychological Association (6th Ed.)</span></p>',
    'pt_PT' => '<p>Os critérios de aceitação para os artigos são a qualidade e a originalidade da investigação, sendo estes parâmetros avaliados primeiramente pelos Editores. Caso indicado, os artigos são atribuídos ao Editor Adjunto ou ao Editor Convidado que coordena o processo de revisão por pares, que geralmente envolve a procura de dois revisores especialistas na área.</p><p>O Conselho Editorial reserva-se o direito de recusar material para publicação, sendo esse parecer comunicado no prazo máximo de um mês. A aceitação ou rejeição final cabe aos Editores. A menos que assim declarado, o material nesta revista não reflete necessariamente a opinião dos Editores ou do DI&amp;D. Os editores não são responsáveis por qualquer erro de omissão ou por qualquer facto. A <em>Revista Portuguesa de Investigação Comportamental e Social</em> dá primazia a artigos de investigação, mas aceita também outros tipos de manuscritos. Ver <a href="/index.php/ISMT/about/editorialPolicies#custom-0"><strong>Tipos de Artigos</strong></a> para mais informação.</p><p>Os manuscritos devem seguir os requisitos indicados pelas normas da APA Style® detalhadas no <em>Publication Manual of the American Psychological Association</em> (6ª Ed.).</p><p>A submissão de artigos e documentação adicional pode ser feita na plataforma ou através do seguinte endereço eletrónico: investig@ismt.pt</p>',
  ),
  'layoutInstructions' => 
  array (
    'pt_PT' => 'Tabelas à largura do texto todo com 2 colunas em cima e em baixo.<div><div><ol><li>Visualização: Mostrar disposição</li><li>Texto de 2 colunas</li><li>Inserção de Quebra de Disposição</li><li>Inserção de Quebra de Disposição</li><li>No espaço entre as duas Quebras colocar a Tabela e definir para</li><li>Fora definir 2 colunas</li></ol></div><div>33 linhas para Tabelas de 15 (cerca do dobro)</div><div>264 caracteres</div><div>Legenda da tabela: 1,7 cm</div></div><div>Linha nº 1: 0,65</div><div>Linhas seguintes: 0,55</div><div>Linhas 1,1</div><div>Título 1 Espaçamento 20 em cima e 10 em baixo</div><div>Título 2 Espaçamento 9 para cima</div><div>Espaçamento entre parágrafos: 4</div><div>Referências: tamanho 9</div>',
  ),
  'reviewPolicy' => 
  array (
    'en_US' => '<p>The <strong><em>Portuguese Journal of Behavioral and Social Research</em></strong> uses a strictly anonymous peer review process, and the reviewer\'s name is hidden to the author. The reviewer can, by personal criterion, choose to reveal his name to the author in his commentary, but our standard policy is that identity remains hidden.<br />Each manuscript is evaluated by at least two reviewers. All manuscripts are reviewed as rapidly as possible, and an editorial decision is usually achieved up to 6 weeks after submission. No person is authorized to take part in peer review if there is any interest defined as follows: consultant in journal papers, shared ownership, any close relationship with the authors, being a member of an organization whose interests may be affected by publication of the paper.</p><p> </p><h3><label for="reviewGuidelines">Review Guidelines</label></h3><p><strong>Reviewers are asked to observe the following ethical guidelines:</strong></p><p><strong></strong>1. Maintain confidentiality about the manuscripts. Do not share data with colleagues before the manuscript is published.</p><p>2. Do not reproduce the manuscript.</p><p>3. Decline if you have some prejudice against the authors or against research.</p><p>4. Decline if they have a conflict of interest, revealing the conflict of interest. Conflicts of interest can be defined as a set of conditions (e.g., academic competition, certain philosophical values and beliefs) that may result in a biased or unfair assessment of the manuscript.</p><p>5. Meet the deadlines and inform if it becomes impossible to complete the review in time, asking for guidance on the possibility of refusing to review the manuscript or get an additional period of time.</p><p>6. Decline if unable to do the review within the specified period of time</p><p>7. State whether you have completed a previous revision of the manuscript for another journal.</p><p>8. Do not use the review as a way to promote your own research, or suggest the rejection of the paper because it contradicts your own work.</p><h3>Review Process steps</h3><p>1. Providing an honest and constructive assessment of the value of the manuscript.<br />2. Checking if the writing style is:</p><p>• Clear: ideas written in a direct and unambiguous.</p><p>• Concise: lack of redundancy, presentation of words and phrases that communicate the idea in a simple way.</p><p>• Correct: accurate grammar and punctuation.</p><p>3. Analyzing the strengths and weaknesses of the study in each section of the manuscript. For example:</p><p>• In the Introduction, the authors provide a convincing line of argument, cite relevant sources, focus on ideas (and not on facts or findings discrete), or raise questions and derivative hypotheses from the theory?</p><p>• In Methods, strategies are clearly described, the description of the sample has sufficient detail, the measures are well operationalized and have appropriate psychometric characteristics? Statistical methods are the most appropriate and well justified?</p><p>• The Results are presented clearly and follow the order of the research questions? Tables or figures are necessary and clear?</p><p>• In Discussion, the results are presented concisely and accurately, and represent the data presented previously? The results are integrated within a broader theoretical debate, including the revised references in the introduction? An effort was made to go beyond the facts and to present explanations? The introductory questions are answered? The limitations were reflected?</p><p>4. Giving suggestions on how to make the manuscript more complete, relevant and readable.<br />5. Asking specific questions to the authors so that they make the manuscript more relevant to the target audience, but do not ask questions just because they are interesting, respecting the objectives and design of the study.<br />6. Checking the references and indicate further if appropriate.<br />7. Indicating whether to the editor:</p><p>• The manuscript should be rejected in PJBSR.</p><p>• The manuscript should be accepted conditionally.</p>• The manuscript should be accepted.<br /><p>The members of the Editorial Board undertake to perform 4-6 annual reviews and to do so in time. Those who consistently decline, or make revisions that do not make the deadlines are asked to leave the Editorial Board.</p><p><br />All reviewers will be scored by the quality and timeliness (up 5 points). The quality and timeliness of reviews are essential to the enhancement of PJBSR. Reviewers who do analysis of high value in a timely manner are providing an essential service to the journal.</p><p><strong><br /></strong></p><p><strong>Reviewers have the following rights:</strong></p><p><strong></strong>1. Be informed of the decision of the Editor of manuscripts that evaluated for PJBSR.</p><p>2. Receive comments from other reviewers for their own edification.</p><p>3. A list of members of the Editorial Board will be published in each issue of the journal.</p><p>4. The reviewers that contribute to the high quality of the journal (4-5 points) will be included in the list of Reviewers of the PJBSR in the latest edition of the publication year, and may be invited to the Editorial Board of the following year.</p><p><br /><strong>Reviewers are advised to be guided by the following references:</strong></p><p><strong></strong>Ramos-Alvarez, M. M., Moreno-Fernández, M. M., Valdés-Conroy, B., &amp; Catena, A. (2008). Criteria of the peer-review process for publication of experimental and quasi-experimental research in Psychology: A guide for creating research papers. <em>International Journal of Clinical Psychology and Health, 8,</em> 751-764.</p><p><strong>Sources</strong>:</p><p>Council on Scientific Editors appearing Editorial Policy Statement (2005). <em>Science, 25</em>(6). S. P.<br />Dembowski, F. L. (2010). Guidelines and advice to authors, editors and reviewers for professional journals and conference Proposals. <em>International Journal of Organizational Innovation, sv,</em> 1-53. </p>',
    'pt_PT' => '<p>Cada manuscrito é avaliado, pelo menos, por dois revisores. Todos os manuscritos são revistos tão rapidamente quanto possível, e uma decisão editorial é geralmente obtida até 6 semanas após a submissão.</p><p>Nenhuma pessoa está autorizada a assumir papel na revisão por pares se tiver algum interesse definido da seguinte forma: consultoria em artigos da revista, propriedade compartilhada, qualquer relação próxima com os autores, ser membro de uma organização cujos interesses possam ser afetados pela publicação do artigo.</p><p>O processo de revisão é duplamente cego (os revisores desconhecem os autores e os autores desconhecem os revisores).</p><h3>Diretrizes de revisão</h3><p><strong>Os revisores são convidados a seguir as seguintes orientações éticas:</strong></p><p><strong></strong>1. Manter a confidencialidade sobre os manuscritos.</p><p>2. Não partilhar dados com colegas antes do manuscrito ser publicado.</p><p>3. Não reproduzir o manuscrito.</p><p>4. Declinar se tiver algum preconceito contra os autores ou contra a investigação.</p><p>5. Declinar se tiver algum conflito de interesses, revelando qual o conflito de interesses. Os conflitos de interesse podem ser definidos como um conjunto de condições (p.e., competição académica, determinados valores filosóficos e crenças) que podem resultar numa avaliação tendenciosa ou injusta do manuscrito.</p><p>6. Respeitar os prazos de tempo especificados e informar se se tornar impossível concluir a análise em tempo útil, pedindo orientação sobre a possibilidade de recusar-se a rever o manuscrito ou obter um período adicional de tempo especificado.</p><p>7. Declinar se não o pode fazer no período de tempo especificado.</p><p>8. Informar se já fez a revisão prévia do manuscrito para outra revista.</p><p>9. Não usar a revisão como forma de promover a sua própria investigação, nem sugerir a rejeição do trabalho porque ele contradiz o seu próprio trabalho.</p><h3><strong>Passos no Processo de Revisão</strong></h3><p>1. Fornecer uma avaliação honesta e construtiva do valor do manuscrito.</p><p>2. Verificar se o estilo de escrita é:</p><p>• Claro: ideias escritas de forma direta e não ambígua.</p><p>• Conciso: ausência de redundância, apresentação de palavras e frases que comunicam a ideia de forma simples.</p><p>• Correto: gramática e pontuação precisas.</p><p>3. Analisar os pontos fortes e fracos do estudo em cada secção do manuscrito. Por exemplo:</p><p>• Na <strong>Introdução</strong>, os autores fornecem uma linha de argumentação convincente, citam fontes importantes, focam em ideias (e não em factos ou descobertas discretas), e colocam questões ou hipóteses derivativas da teoria?</p><p>• Nos <strong>Métodos</strong>, as estratégias são descritas claramente, a descrição da amostra apresenta detalhe suficiente, as medidas são bem operacionalizadas e têm características psicométricas apropriadas? Os métodos estatísticos são os mais adequados e estão bem justificados.</p><p>• Os <strong>Resultados</strong> são apresentados de forma clara e seguem a ordem das perguntas de pesquisa? As tabelas ou figuras são necessárias e claras?</p><p>• Na <strong>Discussão</strong>, os resultados são apresentados de forma concisa e precisa e representam os dados apresentados previamente? Os resultados são integrados no contexto de um debate teórico mais alargado, incluindo as referências revistas na introdução? Foi feito um esforço de ir para além dos factos e de apresentar explicações? As questões introdutórias estão respondidas? As limitações foram refletidas?</p><p>4. Dar sugestões sobre como tornar o manuscrito mais completo, relevante e legível.</p><p>5. Fazer perguntas específicas aos autores por forma a que estes tornem o manuscrito mais relevante para o público-alvo, mas não fazer perguntas só porque são interessantes para o revisor, respeitando os objetivos e o desenho do estudo.</p><p>6. Confirmar as referências bibliográficas e indicar outras se tal for apropriado.</p><p>7. Indicar ao editor se:</p><p>• O manuscrito deve ser rejeitado na RPICS.</p><p>• O manuscrito deve ser aceite condicionalmente.</p><p>• O manuscrito deve ser aceite.</p><p>Os membros do Corpo Editorial comprometem-se a efetuar 4 a 6 revisões anuais e a fazê-lo em tempo útil. Aqueles que consistentemente declinarem fazer revisões ou que o não façam dentro dos prazos são convidados a deixar o Corpo Editorial.</p><p>Todos os revisores serão pontuados pela qualidade e pela pontualidade (até 5 pontos). A alta qualidade e a oportunidade das opiniões são essenciais para a valorização da RPICS. Revisores que fazem análises de valor elevado de forma atempada estão a fornecer um serviço essencial à revista.</p><p><strong>Os revisores têm os seguintes direitos:</strong></p><p><strong></strong>1. Ser informados da decisão do Editor sobre manuscritos que avaliaram para a RPICS.</p><p>2. Receber os comentários dos outros revisores para a sua própria edificação.</p><p>3. A lista dos membros do Conselho Editorial será publicada em cada edição da revista.</p><p>4. Os revisores que contribuam para a alta qualidade da revista (4-5 pontos) serão incluídos na lista de Revisores da RPICS na última edição do ano de publicação, podendo, ser convidados para o Corpo Editorial do ano seguinte.</p><p>Os revisores são aconselhados a orientar-se pelas seguintes referências:</p><p><a href="http://www.aepc.es/ijchp/ramos-es.pdf">Ramos-Alvarez, M. M., Moreno-Fernández, M. M., Valdés-Conroy, B. e Catena, A. (2008). Criteria of the peer-review process for publication of experimental and quasi-experimental research in Psychology: A guide for creating research papers.<em>International Journal of Clinical and Health Psychology, 8,</em> 751-764</a>.</p><p> </p><p><strong>Fontes:</strong></p><p>Council on Scientific Editors Editorial Policy Statement appearing (2005). <em>Science, 25</em> (6). s.p.</p><p>Dembowski, F. L. (2010). Guidelines and advice to authors, editors and reviewers for professional journals and conference proposals.<em>International Journal of Organizational Innovation,</em> <em>s.v.,</em>1–53.</p>',
  ),
  'description' => 
  array (
    'en_US' => '<form><p><span>The </span><span><strong><em>Portuguese Journal of Behavioral and Social Research (PJBSR)</em></strong></span><span> is a multidisciplinary journal with peer review published biannually by the Department of Research &amp; Development of the Instituto Superior Miguel Torga.</span></p><p><span><br /></span></p><p><span>The PJBSR accepts for publication research articles with quantitative methodologies and review articles in the areas of Behavioral and Social Sciences submitted by experts and researchers, national and international.</span></p><p><span><br /></span></p><p><span>The PJBSR is an essential reading for psychologists, social workers, sociologists, and all professionals with an interest in social and behavioral research.</span></p><p> </p><p><span>All content is available online and is open access, <span>meaning that all content is freely available without charge to the users or institutions. Users are allowed to read, download, copy, distribute, print, search, or link to the full texts of the articles, or use them for any other lawful purpose, without asking prior permission from the publisher or the author. This is in accordance with the BOAI definition of open access.</span></span></p><p><span><br /></span></p><p><span>The edition is the responsibility of the Department of Research &amp; Development </span><span>from Instituto Superior Miguel Torga</span></p><p> </p><p><strong>Editors-in-Chief</strong><span>: </span><a href="https://www.researchgate.net/profile/Helena_Espirito_Santo"><span>Helena Espírito Santo</span></a><span> e </span><span><a href="https://www.researchgate.net/profile/Sonia_Guadalupe">Sónia Guadalupe</a></span></p><p><span>Coimbra, Portugal</span></p><p> </p><p><strong>ISSN online</strong><span>: 2183-4938</span></p></form><p> </p>',
    'pt_PT' => '<p>A <strong>Revista Portuguesa de Investigação Comportamental e Social</strong> (RPICS) é uma revista multidisciplinar com revisão por pares publicada semestralmente pelo Departamento de Investigação &amp; Desenvolvimento (DI&amp;D) do Instituto Superior Miguel Torga.</p><p>A RPICS aceita para publicação artigos de investigação com metodologias quantitativas e artigos de revisão, nas áreas das Ciências Comportamentais e Sociais, submetidos por especialistas e investigadores, nacionais e internacionais.</p><p>A RPICS é de leitura essencial para psicólogos, assistentes sociais, sociólogos e todos os profissionais com interesse em investigação comportamental e social.</p><br /><p>Todo o conteúdo está disponível on-line e é de Acesso Aberto, significando que todo o conteúdo é disponibilizado gratuitamente sem encargos para os seus usuários ou instituições. Os  utlizadores estão autorizados a ler, descarregar, copiar, distribuir, imprimir, pesquisar, ou criar ligações para os textos completos dos artigos, ou utilizá-los para qualquer outro propósito legal, sem pedir permissão prévia ao editor ou ao autor. Isto está de acordo com a definição da BOAI de acesso aberto.</p><p> </p><p>A edição é da responsabilidade do Departamento de Investigação &amp; Desenvolvimento do Instituto Superior Miguel Torga</p><br /><p><strong>Editoras-chefe</strong>: <a href="https://www.researchgate.net/profile/Helena_Espirito_Santo">Helena Espírito Santo</a> e <a href="https://www.researchgate.net/profile/Sonia_Guadalupe">Sónia Guadalupe</a></p><p>Coimbra, Portugal</p><br /><p><strong>ISSN online</strong>: 2183-4938</p>',
  ),
  'journalPageFooter' => 
  array (
    'pt_PT' => '<p> </p><p> </p><p> </p>',
  ),
  'journalPageHeader' => 
  array (
    'pt_PT' => '<!-- 	 --> <!-- 	 --><script type="mce-text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var nol_t = function() { return { record: function() { return { post: function() {} } } } };
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><p style="margin: 0px; font-size: 26px; line-height: normal; font-family: \'Trajan Pro\'; color: #048a78;"> </p>',
    'en_US' => '<!-- 	 --> <!-- 	 --><script type="text/javascript">// <![CDATA[
try {
window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener(\'DOMContentLoaded\', func); } };
window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
var AG_onLoad=function(func){if(document.readyState==="complete"||document.readyState==="interactive")func();else if(document.addEventListener)document.addEventListener("DOMContentLoaded",func);else if(document.attachEvent)document.attachEvent("DOMContentLoaded",func)};
var AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
var AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
var AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
(function() { window.Ya = window.Ya || {}; window.Ya.Metrika = function() { var noop = function() {}; this.addFileExtension = noop; this.extLink = noop; this.file = noop; this.hit = noop; this.notBounce = noop; this.params = noop; this.reachGoal = noop; this.replacePhones = noop; }; })();
var _gaq = []; var _gat = { _getTracker: function() { return { _initData: function(){}, _trackPageview: function(){}, _trackEvent: function(){}, _setAllowLinker: function() {}, _setCustomVar: function() {} } }, _createTracker: function() { return this._getTracker(); }, _anonymizeIp: function() {} };
function urchinTracker() {};
var nol_t = function() { return { record: function() { return { post: function() {} } } } };
var addthis = { init: function() {}, addEventListener: function() {}, button: function() {}, counter: function() {}, update: function() {}, toolbox: function() {}, layers: function() {} };
window.uabInject = function() {};
} catch (ex) { console.error(\'Error executing AG js: \' + ex); }
// ]]></script><p style="margin: 0px; font-size: 26px; line-height: normal; font-family: \'Trajan Pro\'; color: #048a78;"> </p>',
  ),
); ?>