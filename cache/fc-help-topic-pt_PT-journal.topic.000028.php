<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'journal/topic/000028',
        'locale' => 'pt_PT',
        'title' => 'Contextos',
        'toc' => 'journal/toc/000005',
        'key' => 'journal.managementPages.readingTools.contexts',
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
      'value' => '<p>Cada conjunto de Ferramentas de Leitura é composto de ferramentas individuais (por exemplo, Estudos Relacionados, Forum On-line, etc.) com cada ferramenta consistindo de bases de dados relevantes agrupadas por contexto. Pode-se adicionar, editar ou eliminar bases de dados, bem como o contexto a que pertence.</p><p><em>Metadados para Artigos num Contexto</em>. O Director pode alterar o título da ferramenta. Está também disponível a opção para determinar se as palavras-chave do autor (as padrão), o nome do autor (por exemplo, para uso com Outros Trabalhos do Autor) ou termos de indexação geográfica serão usadas na pesquisa dentro das bases de dados. Outra opção, usada com Definir Termos, permite ao Leitor escolher qual o termo para pesquisa com um clique duplo sobre qualquer palavra do texto lido. Os Directores podem activar estas opções para construir as suas próprias ferramentas de pesquisa.</p><p><em>Editar Pesquisas para cada Ferramenta</em>. Através da opção Pesquisas, o Director pode editar ou remover o URL de pesquisa para cada base de dados numa ferramenta, assim como reordenar as bases de dados que aparecem na ferramenta. Para cada base de dados, é fornecido um URL, permitindo ao Leitor aprender mais sobre a base de dados, e um URL para permitir a pesquisa em si. Existem dois tipos de pesquisas que podem ser configuradas, uma pesquisa via GET, e se esta não funcionar com a base de dados uma pesquisa via POST. </p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Pesquisas via GET',
      ),
      'value' => '<p>Para uma pesquisa via GET, execute uma pesquisa e identifique o URL resultante. Por exemplo, no Google, uma pesquisa por "FOOBAR" resulta no URL</p><p><samp class="code">http://www.google.ca/search?hl=en&q=FOOBAR&meta=</samp></p><p>Substitua o termo de pesquisa, FOOBAR, pela variável &#123;$formKeywords&#125;. Ao encontrar esta variável, o sistema automaticamente a substituirá pelos metadados apropriados. Tal alteração apresenta o URL de pesquisa</p><p><samp class="code">http://www.google.ca/search?hl=en&q=&#123;$formKeywords&#125;&meta=</samp></p><p>para a ferramenta. No entanto, alguns parâmetros do exemplo são desnecessários, permitindo o uso de um URL simplificado do tipo</p><p><samp class="code">http://www.google.ca/search?q=&#123;$formKeywords&#125;</samp></p><p>para a ferramenta.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Pesquisas via POST',
      ),
      'value' => '<p>Criar pesquisas para formulários via POST é mais complicado. Novamente, usando o Google como ferramenta, pode ver o código fonte da página, procurando por <samp class="code">&lt;form action="/search" ...&gt;</samp>, que será o URL inicial <samp class="code">http://www.google.com/search</samp>. Observe a seguir cada elemento <samp class="code">&lt;input ...&gt;</samp> e <samp class="code">&lt;select ... &gt;</samp> no formulário, e adicioná-los como pares <samp class="code">name=value</samp> separados por <samp class="code">&</samp> até o fim do URL. O elemento que especifica o campo que permite ao utilizador inserir (no caso do Google, chamado <samp class="code">q</samp>), deve ser também &#123;$formKeywords&#125;, substituído pelo sistema com o valor apropriado.</p><p>Um método mais simples lidar com formularios via POST é utilizar alguma ferramenta ou editor de texto simples, guardando o código fonte do formulário no seu computador, alterar <samp class="code">method=post</samp> para <samp class="code">method=get</samp> no campo apropriado, e alterar o valor de <samp class="code">action=</samp> para formar um URL completo, por exemplo, <samp class="code">http://www.google.com/search</samp> e não apenas <samp class="code">/search</samp>. Pode consultar mais tarde o ficheiro HTML modificado no seu navegador e usar o método GET acima para construir o URL de pesquisa.</p><p>Algumas ferramentas de pesquisa não suportam consultas via GET e caso o método anterior não funcionar, pode-se inserir dados via POST no campo "Dados via POST". Se o exemplo acima precissase enviar os dados, é necessário inserir <samp class="code">http://www.google.com/search</samp> para o URL de pesquisa e <samp class="code">q=&#123;$formKeywords&#125;</samp> para os dados de POST.<p>Certifique-se do funcionamento correcto do URL, substituindo &#123;$formKeywords&#125; por um termo qualqer no URL e testando o retorno da pesquisa se apresenta as informações esperadas. Note que para pesquisas via POST tal acção pode não ser sempre possível, dependendo da ferramenta. Para URLs que não possuem sistema de pesquisa apropriado, é possível utilizar o Google como ferramenta, restringindo por URL. Um termo de pesquisa do tipo <samp class="code">site:mysite.com FOOBAR</samp> no Google executará uma pesquisa por "FOOBAR" apenas em mysite.com. Esta técnica é utilizada em várias ferramentas de leitura actuais.</p>',
    ),
  ),
); ?>