var _0xe081=["\x2E\x62\x75\x74\x74\x6F\x6E","\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72","\x2E\x71\x72\x2D\x63\x6F\x64\x65","\x63\x6C\x69\x63\x6B","\x23\x69\x6E\x70\x75\x74\x5F\x74\x65\x78\x74","\x76\x61\x6C\x75\x65","","\x63\x68\x69\x6C\x64\x45\x6C\x65\x6D\x65\x6E\x74\x43\x6F\x75\x6E\x74","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x6E\x6F\x74\x20\x76\x61\x6C\x69\x64\x20\x69\x6E\x70\x75\x74","\x6C\x6F\x67","\x73\x74\x79\x6C\x65","\x64\x69\x73\x70\x6C\x61\x79\x3A\x20\x6E\x6F\x6E\x65","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x23\x30\x30\x30\x30\x30\x30","\x23\x66\x66\x66\x66\x66\x66","\x48","\x43\x6F\x72\x72\x65\x63\x74\x4C\x65\x76\x65\x6C","\x62\x75\x74\x74\x6F\x6E","\x63\x72\x65\x61\x74\x65\x45\x6C\x65\x6D\x65\x6E\x74","\x61\x70\x70\x65\x6E\x64\x43\x68\x69\x6C\x64","\x61","\x64\x6F\x77\x6E\x6C\x6F\x61\x64","\x71\x72\x5F\x63\x6F\x64\x65\x2E\x70\x6E\x67","\x73\x65\x74\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x44\x6F\x77\x6E\x6C\x6F\x61\x64\x20\x3C\x69\x20\x63\x6C\x61\x73\x73\x3D\x22\x66\x61\x2D\x73\x6F\x6C\x69\x64\x20\x66\x61\x2D\x64\x6F\x77\x6E\x6C\x6F\x61\x64\x22\x3E\x3C\x2F\x69\x3E","\x2E\x71\x72\x2D\x63\x6F\x64\x65\x20\x69\x6D\x67","\x63\x61\x6E\x76\x61\x73","\x73\x72\x63","\x67\x65\x74\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x68\x72\x65\x66","\x74\x6F\x44\x61\x74\x61\x55\x52\x4C","\x54\x65\x78\x74\x20\x69\x73\x20\x74\x6F\x6F\x20\x6C\x6F\x6E\x67\x20\x6F\x72\x20\x74\x6F\x6F\x20\x73\x68\x6F\x72\x74\x2C\x20\x6E\x6F\x74\x20\x64\x65\x74\x65\x63\x74\x65\x64"];let btn=document[_0xe081[1]](_0xe081[0]);let qr_code_element=document[_0xe081[1]](_0xe081[2]);btn[_0xe081[13]](_0xe081[3],()=>{let _0x2942x3=document[_0xe081[1]](_0xe081[4]);if(_0x2942x3[_0xe081[5]]!= _0xe081[6]){if(qr_code_element[_0xe081[7]]== 0){generate(_0x2942x3)}else {qr_code_element[_0xe081[8]]= _0xe081[6];generate(_0x2942x3)}}else {console[_0xe081[10]](_0xe081[9]);qr_code_element[_0xe081[11]]= _0xe081[12]}});function generate(_0x2942x3){qr_code_element[_0xe081[11]]= _0xe081[6];var _0x2942x5= new QRCode(qr_code_element,{text:`${_0xe081[6]}${_0x2942x3[_0xe081[5]]}${_0xe081[6]}`,width:180,height:180,colorDark:_0xe081[14],colorLight:_0xe081[15],correctLevel:QRCode[_0xe081[17]][_0xe081[16]]});let _0x2942x6=document[_0xe081[19]](_0xe081[18]);qr_code_element[_0xe081[20]](_0x2942x6);let _0x2942x7=document[_0xe081[19]](_0xe081[21]);_0x2942x7[_0xe081[24]](_0xe081[22],_0xe081[23]);_0x2942x7[_0xe081[8]]= `${_0xe081[25]}`;_0x2942x6[_0xe081[20]](_0x2942x7);let _0x2942x8=document[_0xe081[1]](_0xe081[26]);let _0x2942x9=document[_0xe081[1]](_0xe081[27]);if(_0x2942x8[_0xe081[29]](_0xe081[28])== null){setTimeout(()=>{_0x2942x7[_0xe081[24]](_0xe081[30],`${_0xe081[6]}${_0x2942x9[_0xe081[31]]()}${_0xe081[6]}`)},300)}else {setTimeout(()=>{_0x2942x7[_0xe081[24]](_0xe081[30],`${_0xe081[6]}${_0x2942x8[_0xe081[29]](_0xe081[28])}${_0xe081[6]}`)},300)}}generate({value:_0xe081[32]})