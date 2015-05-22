<?php
/**
*
* acp_permissions_phpbb [Português Brasileiro]
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* @package language
* @version 2.0.0
* @author Suporte phpBB <contato@suportephpbb.com.br> http://www.suportephpbb.com.br/
* @copyright (c) 2005 phpBB Group, 2014 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Traduzido por: suporte phpBB & Antonio Carlos Doná - segundo as normas do Acordo Ortográfico
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Ações',
	'ACL_CAT_CONTENT'		=> 'Conteúdo',
	'ACL_CAT_FORUMS'		=> 'Fóruns',
	'ACL_CAT_MISC'			=> 'Diversos',
	'ACL_CAT_PERMISSIONS'	=> 'Permissões',
	'ACL_CAT_PM'			=> 'Mensagens Particulares',
	'ACL_CAT_POLLS'			=> 'Enquetes',
	'ACL_CAT_POST'			=> 'Mensagem',
	'ACL_CAT_POST_ACTIONS'	=> 'Ações da Mensagem',
	'ACL_CAT_POSTING'		=> 'Enviar Mensagem',
	'ACL_CAT_PROFILE'		=> 'Perfil',
	'ACL_CAT_SETTINGS'		=> 'Configurações',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Ações do Tópico',
	'ACL_CAT_USER_GROUP'	=> 'Usuários &amp; Grupos',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'		=> 'Pode ver perfil, lista de membros e usuários online',
	'ACL_U_CHGNAME'			=> 'Pode editar nome de usuário',
	'ACL_U_CHGPASSWD'		=> 'Pode editar senha',
	'ACL_U_CHGEMAIL'		=> 'Pode editar endereço de email',
	'ACL_U_CHGAVATAR'		=> 'Pode editar avatar',
	'ACL_U_CHGGRP'			=> 'Pode editar Grupo pradrão',
	'ACL_U_CHGPROFILEINFO'	=> 'Pode editar as informações do Perfil',

	'ACL_U_ATTACH'		=> 'Pode anexar arquivos',
	'ACL_U_DOWNLOAD'	=> 'Pode transferir arquivos',
	'ACL_U_SAVEDRAFTS'	=> 'Pode salvar rascunhos',
	'ACL_U_CHGCENSORS'	=> 'Pode desativar censura de palavras',
	'ACL_U_SIG'			=> 'Pode usar assinaturas',
	'ACL_U_SENDPM'		=> 'Pode enviar mensagens particulares',
	'ACL_U_MASSPM'		=> 'Pode enviar mensagens para múltiplos usuários',
	'ACL_U_MASSPM_GROUP'=> 'Pode enviar mensagens para Grupos',
	'ACL_U_READPM'		=> 'Pode ler mensagens particulares',
	'ACL_U_PM_EDIT'		=> 'Pode editar as suas mensagens particulares',
	'ACL_U_PM_DELETE'	=> 'Pode excluir as suas mensagens particulares',
	'ACL_U_PM_FORWARD'	=> 'Pode encaminhar mensagens particulares',
	'ACL_U_PM_EMAILPM'	=> 'Pode enviar mensagens particulares por email',
	'ACL_U_PM_PRINTPM'	=> 'Pode imprimir mensagens particulares',
	'ACL_U_PM_ATTACH'	=> 'Pode anexar arquivos nas mensagens particulares',
	'ACL_U_PM_DOWNLOAD'	=> 'Pode transferir arquivos das mensagens particulares',
	'ACL_U_PM_BBCODE'	=> 'Pode usar BBCodes nas mensagens particulares',
	'ACL_U_PM_SMILIES'	=> 'Pode usar smilies nas mensagens particulares',
	'ACL_U_PM_IMG'		=> 'Pode usar a tag [img] BBCode nas mensagens particulares',
	'ACL_U_PM_FLASH'	=> 'Pode usar a tag [flash] BBCode nas mensagens particulares',

	'ACL_U_SENDEMAIL'	=> 'Pode enviar emails',
	'ACL_U_SENDIM'		=> 'Pode enviar mensagens instantâneas',
	'ACL_U_IGNOREFLOOD'	=> 'Pode ingnorar limite de flood',
	'ACL_U_HIDEONLINE'	=> 'Pode ocultar o status online',
	'ACL_U_VIEWONLINE'	=> 'Pode ver todos usuários online',
	'ACL_U_SEARCH'		=> 'Pode pesquisar no painel',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Pode ver o fórum',
	'ACL_F_READ'		=> 'Pode ler o fórum',
	'ACL_F_SEARCH'		=> 'Pode pesquisar no fórum',
	'ACL_F_SUBSCRIBE'	=> 'Pode subscrever o fórum',
	'ACL_F_PRINT'		=> 'Pode imprimir tópicos',
	'ACL_F_EMAIL'		=> 'Pode enviar tópicos por email',
	'ACL_F_BUMP'		=> 'Pode puxar os tópicos para cima',
	'ACL_F_USER_LOCK'	=> 'Pode bloquear os seus tópicos',
	'ACL_F_DOWNLOAD'	=> 'Pode transferir arquivos',
	'ACL_F_REPORT'		=> 'Pode denunciar mensagens',

	'ACL_F_POST'		=> 'Pode criar tópicos',
	'ACL_F_STICKY'		=> 'Pode fixar Tópicos',
	'ACL_F_ANNOUNCE'	=> 'Pode criar anúncios',
	'ACL_F_REPLY'		=> 'Pode responder nos Tópicos',
	'ACL_F_EDIT'		=> 'Pode editar as suas mensagens',
	'ACL_F_DELETE'		=> 'Pode excluir permanentemente as suas mensagens ',
	'ACL_F_SOFTDELETE'	=> 'Pode excluír as suas próprias mensagens<br /><em>Moderadores com permissões para aprovar mensagens, podes restaurar mensagens excluídas.</em>',
	'ACL_F_IGNOREFLOOD' => 'Pode ignorar o Intervalo de Segurança',
	'ACL_F_POSTCOUNT'	=> 'Pode aumentar o contador de mensagens<br /><em>Esta função só é válida para novas mensagens.</em>',
	'ACL_F_NOAPPROVE'	=> 'Pode criar mensagens sem aprovação',

	'ACL_F_ATTACH'		=> 'Pode anexar arquivos',
	'ACL_F_ICONS'		=> 'Pode usar ícones de tópico/mensagem',
	'ACL_F_BBCODE'		=> 'Pode usar BBCode',
	'ACL_F_FLASH'		=> 'Pode usar [flash] BBCode tag',
	'ACL_F_IMG'			=> 'Pode usar [img] BBCode tag',
	'ACL_F_SIGS'		=> 'Pode usar assinatura',
	'ACL_F_SMILIES'		=> 'Pode usar smilies',

	'ACL_F_POLL'		=> 'Pode criar enquetes',
	'ACL_F_VOTE'		=> 'Pode votar em enquetes',
	'ACL_F_VOTECHG'		=> 'Pode editar o seu voto',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Pode editar mensagens',
	'ACL_M_DELETE'		=> 'Pode excluir mensagens permanentemente',
	'ACL_M_SOFTDELETE'	=> 'Pode excluir mensagens<br /><em>Moderadores com permissões para aprovar mensagens, podes restaurar mensagens excluídas.</em>',
	'ACL_M_APPROVE'		=> 'Pode aprovar e restaurar mensagens',
	'ACL_M_REPORT'		=> 'Pode fechar e excluir denúncias',
	'ACL_M_CHGPOSTER'	=> 'Pode alterar o autor das mensagens',

	'ACL_M_MOVE'	=> 'Pode mover tópicos',
	'ACL_M_LOCK'	=> 'Pode trancar tópicos',
	'ACL_M_SPLIT'	=> 'Pode subdividir Tópicos',
	'ACL_M_MERGE'	=> 'Pode fundir tópicos',

	'ACL_M_INFO'	=> 'Pode ver informações das mensagens',
	'ACL_M_WARN'	=> 'Pode enviar advertência<br /><em>Esta configuração é apenas definida globalmente. Não é básica deste painel.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Pode gerenciar banimentos<br /><em>Esta configuração é apenas definida globalmente. Não é básica deste painel.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Pode alterar as configurações do Fórum. Verificar atualizações',
	'ACL_A_SERVER'		=> 'Pode alterar as configurações do servidor/comunicações',
	'ACL_A_JABBER'		=> 'Pode alterar as configurações Jabber',
	'ACL_A_PHPINFO'		=> 'Pode ver as configurações php',

	'ACL_A_FORUM'		=> 'Pode gerenciar fóruns',
	'ACL_A_FORUMADD'	=> 'Pode adicionar fóruns',
	'ACL_A_FORUMDEL'	=> 'Pode excluir fóruns',
	'ACL_A_PRUNE'		=> 'Pode executar a limpeza de fóruns',

	'ACL_A_ICONS'		=> 'Pode alterar icones de tópicos/mensagens e smilies',
	'ACL_A_WORDS'		=> 'Pode alterar censura de palavras',
	'ACL_A_BBCODE'		=> 'Pode definir tags de BBCode',
	'ACL_A_ATTACH'		=> 'Pode alterar as configurações de anexos',

	'ACL_A_USER'		=> 'Pode gerenciar usuários<br /><em>Isto também inclui a visualização do navegador dos usuários na lista de usuários online.</em>',
	'ACL_A_USERDEL'		=> 'Pode excluir/limpar usuários',
	'ACL_A_GROUP'		=> 'Pode gerenciar grupos',
	'ACL_A_GROUPADD'	=> 'Pode adicionar grupos',
	'ACL_A_GROUPDEL'	=> 'Pode excluir grupos',
	'ACL_A_RANKS'		=> 'Pode gerenciar ranks',
	'ACL_A_PROFILE'		=> 'Pode gerenciar campos de perfil',
	'ACL_A_NAMES'		=> 'Pode gerenciar nomes proibidos',
	'ACL_A_BAN'			=> 'Pode administrar banimentos',

	'ACL_A_VIEWAUTH'	=> 'Pode ver máscaras de permissão',
	'ACL_A_AUTHGROUPS'	=> 'Pode alterar permissões para grupos',
	'ACL_A_AUTHUSERS'	=> 'Pode alterar permissões para usuários',
	'ACL_A_FAUTH'		=> 'Pode alterar categorias de permissões de fóruns',
	'ACL_A_MAUTH'		=> 'Pode alterar categorias de permissões de moderadores',
	'ACL_A_AAUTH'		=> 'Pode alterar categorias de permissões de administradores',
	'ACL_A_UAUTH'		=> 'Pode alterar categorias de permissões de usuários',
	'ACL_A_ROLES'		=> 'Pode gerenciar as tarefas',
	'ACL_A_SWITCHPERM'	=> 'Pode utilizar outras permissões',

	'ACL_A_STYLES'		=> 'Pode gerenciar estilos',
	'ACL_A_EXTENSIONS'	=> 'Pode gerenciar extensões',
	'ACL_A_VIEWLOGS'	=> 'Pode ver logs',
	'ACL_A_CLEARLOGS'	=> 'Pode limpar logs',
	'ACL_A_MODULES'		=> 'Pode gerenciar módulos',
	'ACL_A_LANGUAGE'	=> 'Pode gerenciar pacotes de idiomas',
	'ACL_A_EMAIL'		=> 'Pode enviar e-mail em massa',
	'ACL_A_BOTS'		=> 'Pode gerenciar bots',
	'ACL_A_REASONS'		=> 'Pode gerenciar razões para as denúncias/reporvações',
	'ACL_A_BACKUP'		=> 'Pode copiar/restaurar Banco de Dados',
	'ACL_A_SEARCH'		=> 'Pode gerenciar os modos e a configuração de pesquisa',
));
?>
