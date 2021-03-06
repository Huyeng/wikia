var AdProviderAdDriver2Helper = function (log, window, expiringStorage) {

	var storage = expiringStorage.makeStorage(window.localStorage)
		, forgetAdsShownAfterTime = 3600 * 1000 // an hour
	;

	// TODO refactor...
	// AdDriver c&p begin

	function AdDriver_isLastDARTCallNoAd(slotname) {
		log('isLastDARTCallNoAd ' + slotname, 5, 'AdProviderAdDriver2');

		var cookieValue = false;

		try {
			var lastDARTCallNoAdCookie = storage.getItem('adDriverLastDARTCallNoAd2');
			cookieValue = AdDriver_getLastDARTCallNoAdFromStorageContents(lastDARTCallNoAdCookie, slotname);
		}
		catch (e) {
			log(e.message, 1, 'AdProviderAdDriver2');
		}

		log(slotname + ' last DART call had no ad? ' + cookieValue, 1, 'AdProviderAdDriver2');

		return cookieValue;
	}

	function AdDriver_getLastDARTCallNoAdFromStorageContents(lastDARTCallNoAdStorage, slotname) {
		log('getLastDARTCallNoAdFromStorageContents ' + lastDARTCallNoAdStorage + ', ' + slotname, 5, 'AdProviderAdDriver2');

		var value = false
			, now = window.wgNow || new Date()
		;

		if (typeof(lastDARTCallNoAdStorage) != 'undefined' && lastDARTCallNoAdStorage) {
			var slotnameTimestamps = JSON.parse(lastDARTCallNoAdStorage);
			for (var i = 0; i < slotnameTimestamps.length; i++) {
				if (slotnameTimestamps[i].slotname == slotname) {
					if (parseInt(slotnameTimestamps[i].ts, 10) + forgetAdsShownAfterTime > now.getTime()) {
						value = true;
					}
					break;
				}
			}
		}

		return value;
	}

	function AdDriver_getNumDARTCall(slotname) {
		log('getNumDARTCall ' + slotname, 5, 'AdProviderAdDriver2');

		var num = 0;

		num = AdDriver_getNumCall('adDriverNumDARTCall2', slotname);
		log(slotname + ' has ' + num + ' DART calls', 3, 'AdProviderAdDriver2');

		return num;
	}

	function AdDriver_getNumCall(storageName, slotname) {
		log('getNumCall ' + storageName + ', ' + slotname, 5, 'AdProviderAdDriver2');

		var cookieNum = 0;

		try {
			var numCallStorage = storage.getItem(storageName);
			cookieNum = AdDriver_getNumCallFromStorageContents(numCallStorage, slotname);
		}
		catch (e) {
			log(e.message, 1, 'AdProviderAdDriver2');
		}

		return cookieNum;
	}

	function AdDriver_getNumCallFromStorageContents(numCallStorage, slotname) {
		log('getNumCallFromStorageContents ' + numCallStorage + ', ' + slotname, 5, 'AdProviderAdDriver2');

		var num = 0
			, now = window.wgNow || new Date()
		;

		if (typeof(numCallStorage) != 'undefined' && numCallStorage) {
			var slotnameObjs = JSON.parse(numCallStorage);
			for (var i = 0; i < slotnameObjs.length; i++) {
				if (slotnameObjs[i].slotname == slotname) {
					if (parseInt(slotnameObjs[i].ts, 10) + forgetAdsShownAfterTime > now.getTime()) {
						num = parseInt(slotnameObjs[i].num, 10);
						break;
					}
				}
			}
		}

		return num;
	}

	function AdDriver_getMinNumDARTCall(country) {
		log('getMinNumDARTCall ' + country, 5, 'AdProviderAdDriver2');

		country = country.toUpperCase();
		if (window.wgHighValueCountries && window.wgHighValueCountries[country]) {
			return window.wgHighValueCountries[country];
		}
		return 3;
	}

	function AdDriver_incrementNumAllCall(slotname) {
		log('incrementNumAllCall ' + slotname, 5, 'AdProviderAdDriver2');

		return AdDriver_incrementNumCall('adDriverNumAllCall2', slotname);
	}

	function AdDriver_incrementNumCall(storageName, slotname) {
		log('incrementNumCall ' + storageName + ', ' + slotname, 5, 'AdProviderAdDriver2');

		var newSlotnameObjs = new Array()
			, numInCookie = 0
			, slotnameInStorage = false
			, now = window.wgNow || new Date()
		;

		try {
			var numCallStorage = storage.getItem(storageName);
			var incrementResult = AdDriver_incrementStorageContents(numCallStorage, slotname);
			slotnameInStorage = incrementResult.slotnameInStorage;
			numInCookie = incrementResult.num;
			newSlotnameObjs = incrementResult.newSlotnameObjs;
		}
		catch (e) {
			log(e.message, 1, 'AdProviderAdDriver2');
		}

		if (!slotnameInStorage) {
			newSlotnameObjs.push( {slotname : slotname, num : ++numInCookie, ts : window.wgNow.getTime()} );
		}

		// Save in storage for one hour
		storage.setItem(storageName, JSON.stringify(newSlotnameObjs), forgetAdsShownAfterTime);

		return numInCookie;
	}

	function AdDriver_incrementStorageContents(numCallStorage, slotname) {
		log('incrementStorageContents ' + numCallStorage + ', ' + slotname, 5, 'AdProviderAdDriver2');

		var newSlotnameObjs = new Array();
		var num = 0;
		var slotnameInStorage = false;

		if (typeof(numCallStorage) != 'undefined' && numCallStorage) {
			var slotnameObjs = JSON.parse(numCallStorage);
			for (var i = 0; i < slotnameObjs.length; i++) {
				if (slotnameObjs[i].slotname == slotname) {
					slotnameInStorage = true;
					if (parseInt(slotnameObjs[i].ts, 10) + forgetAdsShownAfterTime > window.wgNow.getTime()) {
						num = parseInt(slotnameObjs[i].num, 10);
						timestamp = parseInt(slotnameObjs[i].ts, 10);
					}
					newSlotnameObjs.push( {slotname : slotname, num : ++num, ts : window.wgNow.getTime()} );
				}
				else {
					newSlotnameObjs.push(slotnameObjs[i]);
				}
			}
		}

		var retObj = new Object();
		retObj.newSlotnameObjs = newSlotnameObjs;
		retObj.num = num;
		retObj.slotnameInStorage = slotnameInStorage;
		return retObj;
	}

	function AdDriver_incrementNumDARTCall(slotname) {
		log('incrementNumDARTCall ' + slotname, 5, 'AdProviderAdDriver2');

		return AdDriver_incrementNumCall('adDriverNumDARTCall2', slotname);
	}

	function AdDriver_setLastDARTCallNoAd(slotname, value) {
		log('setLastDARTCallNoAd ' + slotname + ', ' + value, 5, 'AdProviderAdDriver2');

			var newSlotnameTimestamps = new Array();
			var slotnameInStorage = false;
			try {
				var lastDARTCallNoAdCookie = storage.getItem('adDriverLastDARTCallNoAd2');
				var setResult = AdDriver_setLastDARTCallNoAdInStorageContents(lastDARTCallNoAdCookie, slotname, value);
				newSlotnameTimestamps = setResult.newSlotnameTimestamps;
				slotnameInStorage = setResult.slotnameInStorage;
			}
			catch (e) {
				log(e.message, 1, 'AdProviderAdDriver2');
			}

			if (value && !slotnameInStorage) {
				newSlotnameTimestamps.push( {slotname: slotname, ts: value} );
			}

			if (newSlotnameTimestamps.length) {
				// Save in storage for one hour
				storage.setItem('adDriverLastDARTCallNoAd2', JSON.stringify(newSlotnameTimestamps), forgetAdsShownAfterTime);
			}

		return value;
	}

	function AdDriver_setLastDARTCallNoAdInStorageContents(lastDARTCallNoAdStorage, slotname, value) {
		log('setLastDARTCallNoAdInStorageContents ' + lastDARTCallNoAdStorage + ', ' + slotname + ', ' + value, 5, 'AdProviderAdDriver2');

		var slotnameInStorage = false;
		var newSlotnameTimestamps = new Array();

		if (typeof(lastDARTCallNoAdStorage) != 'undefined' && lastDARTCallNoAdStorage) {
			var slotnameTimestamps = JSON.parse(lastDARTCallNoAdStorage);
			// look for slotname. If there is a new value, change the old value. If
			// the new value is null, simply do not include slotname in updated cookie.
			for (var i = 0; i < slotnameTimestamps.length; i++) {
				if (slotnameTimestamps[i].slotname == slotname) {
					slotnameInStorage = true;
					if (value) {
						newSlotnameTimestamps.push( {slotname: slotname, ts: value} );
					}
				}
				else {
					newSlotnameTimestamps.push(slotnameTimestamps[i]);
				}
			}
		}

		var retObj = new Object();
		retObj.slotnameInStorage = slotnameInStorage;
		retObj.newSlotnameTimestamps = newSlotnameTimestamps;
		return retObj;
	}

	// AdDriver c&p end

	return {
		  name: 'AdDriver2Helper'
		, AdDriver_getMinNumDARTCall: AdDriver_getMinNumDARTCall
		, AdDriver_getNumDARTCall: AdDriver_getNumDARTCall
		, AdDriver_incrementNumAllCall: AdDriver_incrementNumAllCall
		, AdDriver_incrementNumDARTCall: AdDriver_incrementNumDARTCall
		, AdDriver_isLastDARTCallNoAd: AdDriver_isLastDARTCallNoAd
		, AdDriver_setLastDARTCallNoAd: AdDriver_setLastDARTCallNoAd
	};
};
