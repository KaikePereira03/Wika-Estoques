(function() {
 const messages = JSON.parse("{\"5DVKvQ\":\"Mais tarde\",\"Fq4YOA\":\"Parece que o cartão de crédito usado pela sua equipe expirou. Confira os dados de pagamento e tente de novo.\",\"0jCCmw\":\"Atualize sua forma de pagamento\",\"q976CQ\":\"Não foi possível processar seu último pagamento. Tente realizar o pagamento novamente ou escolha outra forma de pagamento para continuar aproveitando todas as vantagens do {0}.\",\"b5/O6A\":\"Houve um erro ao atualizar a sua forma de pagamento. Tente de novo em alguns minutos.\",\"Jzqb1w\":\"Houve um problema na hora de fazer a assinatura. Tente de novo daqui a pouco e, se o problema persistir, <a href=\\\"{0}\\\" target=\\\"_blank\\\" data-anchor-id=\\\"supportLink\\\" rel=\\\"noopener\\\">entre em contato com nosso suporte</a>.\",\"qzWCHA\":\"Não foi possível processar seu último pagamento. <strong>Tente realizar o pagamento novamente ou escolha outra forma de pagamento para continuar aproveitando todas as vantagens do {0}.</strong>\",\"G7zzvg\":\"Tente de novo agora\",\"G5Dk2A\":\"Sua conta está suspensa. Quer tentar usar essa forma de pagamento novamente?\",\"83+kgw\":\"Tente usar a forma de pagamento salva novamente\",\"FZLVGA\":\"Seu cartão de crédito foi recusado. Confira os dados de pagamento e tente de novo.\",\"oOfZRw\":\"Você já fez a assinatura. Se o problema persistir, <a href=\\\"{0}\\\" target=\\\"_blank\\\" data-anchor-id=\\\"supportLink\\\" rel=\\\"noopener\\\">entre em contato com o suporte</a>.\",\"GvI5RA\":\"Nossas últimas tentativas de cobrança não foram bem-sucedidas. Sua assinatura do {0} agora está suspensa. <strong>Para continuar usando o {0}, atualize a sua forma de pagamento.</strong>\",\"vJztTw\":\"Manter o {0}\",\"umF+iQ\":\"Tente de novo agora\"}");
 const cmsg = window["cmsg"] = window["cmsg"] || {};
 const strings = cmsg["strings"] = cmsg["strings"] || {};
 strings["pt-BR"] = strings["pt-BR"] ? Object.assign(strings["pt-BR"], messages) : messages;
})();