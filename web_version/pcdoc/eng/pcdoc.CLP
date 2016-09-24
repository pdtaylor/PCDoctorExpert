(deffunction selprob ;function definition.
	(?x); arguments passed to the function.
	
	

	(if (eq ?x processor) then
		(assert(procprob yes))
	)
	(if (eq ?x memory) then
		(assert(memprob yes))
	)
	(if (eq ?x harddrive) then
		(assert(hdprob yes))
	)
	(if (eq ?x motherboard) then
		(assert(mbprob yes))
	)
	(if (and(neq ?x processor)(neq ?x memory)(neq ?x harddrive)(neq ?x motherboard)) then
		(assert(endprog yes))
	)
);End deffunction.

;deftemplate for processor diagnosis (nb. I haven't used this)
(deftemplate procproblems

	(slot failure (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot overheating (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot system_crash (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot procspeed_incorrect (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
	
	(slot slowdown (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
)

;deftemplate for processor failure troubleshooting
(deftemplate procfailproblems

	(slot recently_assembled (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot extra_proc (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot inserted_improperly (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot bios_incorrect (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot volt_incorrect (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
	
	(slot mboard_notsupport (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot sec_cache (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
)


;deftemplate for cache troubleshooting
(deftemplate cacheproblems

	(slot cache_disabled (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot add_cache (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot insert_improperly (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot overheating (type SYMBOL)
		(allowed-symbols yes no)
		(default no))	
)

;deftemplate for system overheating troubleshooting
(deftemplate sysheatingproblems

	(slot psfan_notrunning (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot proc_ovheating (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot cchips_hot (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot voltreg_hot (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
	
	(slot bchip_hot (type SYMBOL)
		(allowed-symbols yes no)
		(default no))	

	(slot mem_hot (type SYMBOL)
		(allowed-symbols yes no)
		(default no))	
)

;deftemplate for system slowdown troubleshooting
(deftemplate sysslowdownproblems

	(slot add_mem (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot hd_light_blink (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
)

;deftemplate for system instability troubleshooting
(deftemplate sysinstabilityproblems

	(slot err_messages (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot app_fail (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot peripheral_problem (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot new_pc(type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot vesa_running(type SYMBOL)
		(allowed-symbols yes no)
		(default no))
	
	(slot warmup_problems(type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot leanonbox(type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot bios_changed(type SYMBOL)
		(allowed-symbols yes no)
		(default no))
	
)

;deftemplate for incorrect processor speed troubleshooting
(deftemplate procspeedproblems

	(slot led (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot recent_buy (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	 (slot off_slightly (type SYMBOL)
		(allowed-symbols yes no)
		(default no))	

	(slot new_chip (type SYMBOL)
		(allowed-symbols yes no)
		(default no))	
)

;deftemplate for processor overheating troubleshooting
(deftemplate procheatproblems

	(slot hs_comp (type SYMBOL)
		(allowed-symbols yes no)
		(default yes))

	(slot fan_worn (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
)

;deftemplate for memory failure troubleshooting
(deftemplate memfailproblems

	(slot new_pc (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot duplicate (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot opsys (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot dusty (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot simm (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot dimm (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot mismatch (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot old_mboard (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot res_mboard (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot mboard_430hx (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot sdram (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot edo (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot diff_mem_type (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot spec_bios (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot mboard_prob (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot metal (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
)

;deftemplate for memory parity troubleshooting
(deftemplate memparityproblems

	(slot err_boot (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot err_bios_boot (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot it5h_mboard (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot ecc_enabled (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot err_addr_same (type SYMBOL)
		(allowed-symbols yes no)
		(default no))	

	(slot addnew_hardware (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot chkparity_disabled (type SYMBOL)
		(allowed-symbols yes no))		
)

;deftemplate for memory not recognized troubleshooting
(deftemplate memnotrecproblems

	(slot bootup (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot not_all_rec (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

)

;deftemplate for memory out of memory troubleshooting
(deftemplate memoutproblems

	(slot run_prog (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot outmem_win (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
)

;deftemplate for memory performance troubleshooting
(deftemplate memperformanceproblems

	(slot add_noimprov (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot add_worse (type SYMBOL)
		(allowed-symbols yes no)
		(default no))

	(slot over256 (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
	
	(slot use_slow (type SYMBOL)
		(allowed-symbols yes no)
		(default no))
	
	(slot intel430hx (type SYMBOL)
		(allowed-symbols yes no)
		(default no))	
)


;defrule to make recommendations if processor fail is the problem
(defrule procfailrecommend

	(procfailproblems (recently_assembled ?up)(extra_proc ?ex)(inserted_improperly ?ins)(bios_incorrect ?b)(volt_incorrect ?v)(mboard_notsupport ?mb)(sec_cache ?c))

=>
	;facts to be asserted and returned to php.
	(if (eq ?up "yes") then
		(assert (proc01 upgraded yes))

		;upgrade problems provide an additional link to power and memory problems
		(assert (powerproblems yes))
		(assert (memoryproblems yes))
	) 
	(if (eq ?ex "yes") then
		(assert (proc01 extraproc yes))
	)
	(if (eq ?ins "yes") then
		(assert (proc01 insimproprly yes))
	)

	(if (eq ?b "yes") then
		(assert (proc01 bios yes))
	)
	
	(if (eq ?v "yes") then
		(assert (proc01 voltage yes))
	)

	(if (eq ?mb "yes") then
		(assert (proc01 incompatible yes))
	)
	
	(if (eq ?c "yes") then

		(assert (proc01 seccache yes))
		
		;used to create an additional link to seconadary cache problems
		;(assert (secondarycache yes))
	)
)

(defrule sysslowrecommend
	(sysslowdownproblems (add_mem ?m)(hd_light_blink ?f))
=>
	(if (eq ?m "yes") then

		(assert (proc03 memory yes))	

	) 
	(if (eq ?f "yes") then

		(assert (proc03 lblink yes))

	)
		
)

;defrule to make recommendations if processor overheating is the problem
(defrule procheatrecommend
	(procheatproblems(hs_comp ?comp)(fan_worn ?fan))
=>
	(if (eq ?comp "no") then

		(assert (proc05 nocompound yes))

	)
	(if (eq ?fan "yes") then

		(assert (proc05 fanworn yes))

	)	
		
)


(defrule sys_ins_recommend
	(sysinstabilityproblems (err_messages ?e)(app_fail ?a)(peripheral_problem ?p)(new_pc ?n)(warmup_problems ?o)(vesa_running ?v)(leanonbox ?l)(bios_changed ?c))
=>
	(if (eq ?e "yes") then
		(assert (proc02 errmessages yes))		
	) 
	(if (eq ?a "yes") then
		(assert (proc02 appfail yes))
	)
	(if (eq ?p "yes") then
		(assert (proc02 perproblem yes))		
	)
	(if (eq ?n "yes") then
		;used to create a link to problems related to new pcs
		(assert (newpc yes))
	)
	(if (eq ?o "yes") then
		(assert (proc02 overheating yes))
	)
	(if (eq ?v "yes") then
		(assert (proc02 vesa yes))
	)
	(if (eq ?l "yes") then
		(assert (proc02 lean yes))
	)
	
	(if (eq ?c "yes") then
		(assert (proc02 nbios yes))		
	)
)

(defrule procspeedrecommend
	(procspeedproblems(led ?l)(recent_buy ?rb)(off_slightly ?off)(new_chip ?nchip))
=>
	(if (eq ?l "yes") then
		(assert (proc04 led yes))
	)
	(if (eq ?rb "yes") then
		(assert (proc04 recbuy yes))
	)
	(if (eq ?off "yes") then
		(assert (proc04 offslightly yes))
	)
	(if (eq ?nchip "yes") then
		(assert (proc04 newchip yes))
	)
)

;defrule to make recommendations if memory fail is the problem
(defrule memfailrecommend

	(memfailproblems (new_pc ?new)(duplicate ?dup)(opsys ?os)(dusty ?dust)(simm ?s)(dimm ?d)(mismatch ?mis)(old_mboard ?old)(res_mboard ?res)(mboard_430hx ?hx)(sdram ?sd)(edo ?ed)(diff_mem_type ?diff)(spec_bios ?spec)(mboard_prob ?mbp)(metal ?m))

=>
	;facts to be asserted and returned to php.
	(if (eq ?new "yes") then
		;used to create a link to problems related to new pcs
		(assert (newpc yes))

	) 
	(if (eq ?dup "yes") then
		(assert (mem01 dupmem yes))
	)
	(if (eq ?os "yes") then
		
		(assert (mem01 os yes))		
	)

	(if (eq ?dust "yes") then
		(assert (mem01 dust yes))
	)

	(if (eq ?s "yes") then
		(assert (mem01 simm yes))
	)
	
	(if (eq ?d "yes") then
		(assert (mem01 dimm yes))
	)

	(if (eq ?mis "yes") then
		(assert (mem01 memmis yes))
	)
	
	(if (eq ?old "yes") then

		(assert (mem01 memold yes))
	)
	(if (eq ?res "yes") then

		(assert (mem01 restrict yes))
	)
	(if (eq ?hx "yes") then

		(assert (mem01 hx yes))
	)
	(if (eq ?sd "yes") then

		(assert (mem01 sdram yes))
	)
	(if (eq ?ed "yes") then

		(assert (mem01 edo yes))
	)
	(if (eq ?diff "yes") then

		(assert (mem01 diffmtype yes))
	)
	(if (eq ?spec "yes") then

		(assert (mem01 specbios yes))
	)
	(if (eq ?mbp "yes") then

		(assert (mem01 mboard yes))
	)
	(if (eq ?m "yes") then

		(assert (mem01 metal yes))
	)
	
)

(defrule memparityrecommend
	(memparityproblems (err_boot ?boot)(err_bios_boot ?biosboot)(it5h_mboard ?it5h)(ecc_enabled ?ecc)(err_addr_same ?addr)(addnew_hardware ?addhd)(chkparity_disabled ?disabled))
=>
	(if (eq ?boot "yes") then

		(assert (mem02 errboot yes))	

	) 
	(if (eq ?biosboot "yes") then

		(assert (mem02 errbios yes))

	)
	(if (eq ?it5h "yes") then
		
		(assert (mem02 it5h yes))

	)
	(if (eq ?ecc "yes") then
		
		(assert (mem02 ecc yes))

	)
	(if (eq ?addr "yes") then
		
		(assert (mem02 erraddr yes))

	)
	(if (eq ?addhd "yes") then
		
		(assert (mem02 addnewhd yes))

	)
	(if (eq ?disabled "yes") then
		
		(assert (mem02 paritydisabled yes))

	)
	(if (eq ?disabled "no") then
		
		(assert (mem02 parityenabled yes))

	)
)

(defrule memnotrecrecommend
	(memnotrecproblems(bootup ?boot)(not_all_rec ?notall))
=>
	(if (eq ?boot "yes") then

		(assert (mem03 bootup yes))

	)
	(if (eq ?notall "yes") then
		
		(assert (mem03 notallrec yes))

	)
	
)

(defrule memoutrecommend
	(memoutproblems (run_prog ?prog)(outmem_win ?win))
=>
	(if (eq ?prog "yes") then

		(assert (mem04 runprog yes))	

	) 
	(if (eq ?win "yes") then

		(assert (mem04 win yes))

	)
)

(defrule memperformancerecommend
	(memperformanceproblems (add_noimprov ?noimprov)(add_worse ?worse)(over256 ?o)(use_slow ?slow)(intel430hx ?hx))
=>
	(if (eq ?noimprov "yes") then

		(assert (mem05 noimprov yes))	

	) 
	(if (eq ?worse "yes") then

		(assert (mem05 worse yes))

	)
	(if (eq ?o "yes") then
		
		(assert (mem05 more256 yes))

	)
	(if (eq ?slow "yes") then
		
		(assert (mem05 slow yes))

	)
	(if (eq ?hx "yes") then
		
		(assert (mem05 hx yes))

	)
	
)

(defrule poweronrule1
	(poweron "yes")
=>
	(assert (psup0101 livescreen))
)

(defrule poweronrule2
	(poweron "no")
=>
	(assert (psup0201 pwrgood))
)

(defrule livescreenrule
	(livescreen "yes")
=>
	(assert (psup0102 bootsectry))
)

(defrule livescreenrule2
	(livescreen "no")
=>
	(assert (psup0206 videofail))
)

(defrule boottryrule
	(boottry "yes")
=>
	(assert (psup0207 pwronsignal))
)

(defrule boottryrule2
	(boottry "no")
=>
	(assert (psup0103 beeps))
)

(defrule beepsrule
	(beeps "yes")
=>
	(assert (psup0208 mboardfail))
)

(defrule beepsrule2
	(beeps "no")
=>
	(assert (psup0104 newhdw))
)
(defrule newhdwrule
	(newhdw "yes")
=>
	(assert (psup0209 removeadd))
)

(defrule newhdwrule2
	(newhdw "no")
=>
	(assert (psup0105 drvspin))
)

(defrule drvspinrule
	(drvspin "yes")
=>
	(assert (psup0107 badadap))
)

(defrule drvspinrule2
	(drvspin "no")
=>
	(assert (psup0106 spinlead))
)

(defrule spinleadrule
	(spinlead "yes")
=>
	(assert (psup0211 deflead))
)

(defrule spinleadrule2
	(spinlead "no")
=>
	(assert (psup0210 testpc))
)

(defrule badadapterrule
	(badadapter "yes")
=>
	(assert (psup0212 stripdown))
)

(defrule badadapterrule2
	(badadapter "no")
=>
	(assert (psup0108 pwrmboard))
)

(defrule pwronbenchrule
	(bench "yes")
=>
	(assert (psup0213 shortcircuit))
)

(defrule pwronbenchrule2
	(bench "no")
=>
	(assert (psup0214 replace))
)

(defrule pwrgoodrule
	(pwrgood "yes")
=>
	(assert (psup0202 voltset))
)

(defrule pwrgoodrule2
	(pwrgood "no")
=>
	(assert (psup0215 liveoutlet))
)

(defrule voltsetrule
	(voltset "yes")
=>
	(assert (psup0203 mboardlead))
)

(defrule voltsetrule2
	(voltset "no")
=>
	(assert (psup0216 selvolt))
)

(defrule mboardleadrule
	(mboardlead "yes")
=>
	(assert (psup0204 switchfail))
)

(defrule mboardleadrule2
	(mboardlead "no")
=>
	(assert (psup0217 connlead))
)
(defrule switchfailrule
	(switchfail "yes")
=>
	(assert (psup0218 subswitch))
)

(defrule switchfailrule2
	(switchfail "no")
=>
	(assert (psup0205 conncorrect))
)
(defrule concorrectrule
	(conncorrect "yes")
=>
	(assert (psup0105 drvspin))
)

(defrule concorrectrule2
	(conncorrect "no")
=>
	(assert (psup0219 remakeconn))
)

