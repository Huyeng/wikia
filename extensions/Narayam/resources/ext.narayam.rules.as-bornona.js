/**
 * Regular expression rules table for Bornona layout for Assamese script
 * @author Junaid P V ([[user:Junaidpv]])
 * @date 2010-12-22
 * License: GPLv3
 */

var rules = [
['q', '', 'ং'],
['Q', '', 'ঙ'],
['w', '', 'ঢ'],
['W', '', 'ঠ'],
['e', '', 'ে'],
['E', '', 'ৈ'],
['r', '', 'ৰ'],
['R', '', 'ৃ'],
['t', '', 'ত'],
['T', '', 'ট'],
['y', '', 'ধ'],
['Y', '', 'থ'],
['u', '', 'ু'],
['U', '', 'ূ'],
['i', '', 'ি'],
['I', '', 'ী'],
['o', '', 'ো'],
['O', '', 'ৌ'],
['p', '', 'প'],
['P', '', '্ৰ'],
['\\|', '', 'র'],
['\\\\', '', 'ৱ'],
['a', '', 'া'],
['A', '', 'অ'],
['s', '', 'স'],
['S', '', 'শ'],
['d', '', 'দ'],
['D', '', 'ড'],
['f', '', 'ফ'],
['F', '', 'ৰ্ফ'],
['g', '', 'গ'],
['G', '', 'ঘ'],
['h', '', '্'],
['H', '', 'হ'],
['j', '', 'জ'],
['J', '', 'ঝ'],
['k', '', 'ক'],
['K', '', 'খ'],
['l', '', 'ল'],
['L', '', '।'],
['z', '', 'য'],
['Z', '', 'ড়'],
['x', '', 'ষ'],
['X', '', 'ঢ়'],
['c', '', 'চ'],
['C', '', 'ছ'],
['v', '', 'ভ'],
['V', '', '্য'],
['b', '', 'ব'],
['B', '', 'য়'],
['n', '', 'ন'],
['N', '', 'ণ'],
['m', '', 'ম'],
['M', '', 'ঞ'],
['0', '', '০'],
['1', '', '১'],
['2', '', '২'],
['3', '', '৩'],
['4', '', '৪'],
['5', '', '৫'],
['6', '', '৬'],
['7', '', '৭'],
['8', '', '৮'],
['9', '', '৯'],
['\\`', '', '\u200C']
];

jQuery.narayam.addScheme( 'as-bornona', {
	'namemsg': 'narayam-as-bornona',
	'extended_keyboard': false,
	'lookbackLength': 0,
	'keyBufferLength': 0,
	'rules': rules
} );