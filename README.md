WPCM Brazil Conect
Descrição
O WPCM Brazil Conect é um plugin de WordPress que oferece funcionalidades de segurança avançadas para restringir o acesso ao painel administrativo do WordPress com base em faixas de IP e uma lista de usuários permitidos. Além disso, o plugin bloqueia redirecionamentos não autorizados para URLs externas, aumentando a segurança do seu site WordPress.

Funcionalidades
Restrição de Acesso por IP: Limita o acesso ao painel administrativo do WordPress apenas a usuários dentro de uma faixa de IP especificada.
Validação de Usuários Permitidos: Permite o acesso ao painel administrativo somente para usuários especificados na lista de usuários permitidos.
Bloqueio de Redirecionamentos Não Autorizados: Previne redirecionamentos maliciosos para domínios externos não autorizados.
Configuração Através de Página Administrativa: Fornece uma interface no painel administrativo para fácil configuração das regras de acesso e dos domínios permitidos.
Pré-requisitos
WordPress 5.0 ou superior.
Instalação
Baixe o arquivo ZIP do plugin WPCM Brazil Conect.
No painel administrativo do WordPress, vá até "Plugins" > "Adicionar Novo" > "Enviar Plugin".
Escolha o arquivo ZIP baixado e clique em "Instalar Agora".
Após a instalação, ative o plugin clicando em "Ativar Plugin".
Configuração
Após a ativação, siga estes passos para configurar o plugin:

No painel administrativo do WordPress, navegue até "WPCM Brazil Conect" no menu.
Na página de configurações, você encontrará as seguintes opções:
Faixa de IP Permitida: Insira a faixa de IPs permitidos para acessar o painel administrativo.
Usuários Permitidos: Insira os nomes de usuário que terão permissão para acessar o painel administrativo. Separe os nomes de usuário por vírgula.
Domínios Permitidos para Redirecionamento: Liste os domínios permitidos para os quais os redirecionamentos são autorizados. Separe os domínios por vírgula.
Após configurar as opções, clique em "Salvar Alterações" para aplicar a configuração.
Uso
Restrição de Acesso: Com as configurações aplicadas, qualquer tentativa de acesso ao painel administrativo fora da faixa de IP permitida ou por um usuário não listado será redirecionada para saida.php.
Bloqueio de Redirecionamentos: Qualquer tentativa de redirecionamento para um domínio não listado como permitido será bloqueada, e o usuário receberá um alerta de "Redirecionamento bloqueado por motivos de segurança".
Suporte
Para dúvidas, suporte ou contribuições, por favor, abra uma issue no repositório GitHub do plugin.

Licença
O plugin WPCM Brazil Conect é licenciado sob a Licença Pública Geral GNU v2.0.

