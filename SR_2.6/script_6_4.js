"use strict";

function setStyle(myfontColor, myfontSize) {
    let pNode = document.getElementsByClassName('listNumbers')[0];
    let nodes = pNode.childNodes;
    console.log(pNode);
    console.log(nodes);
    pNode.style.fontSize = myfontSize;
    nodes.forEach( item => {
        if (item.nodeType == 1) {
            item.style.color = myfontColor;
        }
    });
    return nodes;
}