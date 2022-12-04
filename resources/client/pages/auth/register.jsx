import AuthLayout from '@shared/layouts/authLayout'
import MWTurnStile from "@components/mwturnstile";

export default function RegisterPage()
{
    return <AuthLayout title={'Registrace'}>
        <div className={'bg-white dark:bg-slate-800 shadow rounded-md overflow-hidden'}>
          <div className={'py-8 px-4 sm:px-10'}>
              <form className={'space-y-6'}>
                  <div>
                      <label htmlFor={'username'} className={'ml-1 text-sm font-inter text-slate-900 dark:text-white block font-medium'}>Uživatelské jméno</label>
                      <div className={'mt-1'}>
                          <input
                            id={'username'}
                            name={'username'}
                            type={'text'}
                            autoComplete={'username'}
                            required
                            className={'block w-full appearance-none rounded-md px-4 py-2 border border-slate-400 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-slate-50 placeholder-slate-700 dark:placeholder-slate-300 shadow-sm focus:border-brand focus:outline-none sm:text-sm'}
                          />
                      </div>
                  </div>
                  <div>
                      <label htmlFor={'email'} className={'ml-1 text-sm font-inter text-slate-900 dark:text-white block font-medium'}>Email</label>
                      <div className={'mt-1'}>
                          <input
                              id={'email'}
                              name={'email'}
                              type={'email'}
                              autoComplete={'email'}
                              required
                              className={'block w-full appearance-none rounded-md px-4 py-2 border border-slate-400 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-slate-50 placeholder-slate-700 dark:placeholder-slate-300 shadow-sm focus:border-brand focus:outline-none sm:text-sm'}
                          />
                      </div>
                  </div>
                  <div>
                      <label htmlFor={'password'} className={'ml-1 text-sm font-inter text-slate-900 dark:text-white block font-medium'}>Heslo</label>
                      <div className={'mt-1'}>
                          <input
                              id={'password'}
                              name={'password'}
                              type={'password'}
                              autoComplete={'password'}
                              required
                              className={'block w-full appearance-none rounded-md px-4 py-2 border border-slate-400 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-slate-50 placeholder-slate-700 dark:placeholder-slate-300 shadow-sm focus:border-brand focus:outline-none sm:text-sm'}
                          />
                      </div>
                  </div>
                  <div>
                      <label htmlFor={'password_confirm'} className={'ml-1 text-sm font-inter text-slate-900 dark:text-white block font-medium'}>Ověření hesla</label>
                      <div className={'mt-1'}>
                          <input
                              id={'password_confirm'}
                              name={'password_confirm'}
                              type={'password'}
                              autoComplete={'password'}
                              required
                              className={'block w-full appearance-none rounded-md px-4 py-2 border border-slate-400 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-slate-50 placeholder-slate-700 dark:placeholder-slate-300 shadow-sm focus:border-brand focus:outline-none sm:text-sm'}
                          />
                      </div>
                  </div>
                  <div>
                      <div className={'rounded-md dark:bg-slate-900 bg-blue-50 p-4'}>
                          <div className={'flex'}>
                              <div className={'flex-shrink-0'}>
                                  <svg className={'h-10 w-10 text-orange-500'} viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.3146 7.26134C22.346 7.11258 17.5089 8.87182 13.7968 12.1778l1.2307-6.74308-3.1939-.58208L9.67207 16.6889 21.5124 18.8498 22.0945 15.6559l-6.0801-1.1096c2.9126-2.5542 6.6454-3.9781 10.5192-4.0126C30.4073 10.4993 34.1648 11.8565 37.1224 14.3585s4.9188 5.9826 5.5269 9.8085C43.2573 27.9929 42.4718 31.91 40.4356 35.2057c-2.0362 3.2956-5.1877 5.7509-8.8813 6.9191S23.8704 43.0965 20.3094 41.5711c-3.5609-1.5254-6.456-4.2784-8.1586-7.7582-1.7026-3.4797-2.0995-7.455-1.1185-11.2027L7.89023 21.7861c-1.02566 3.9081-.81053 8.0386.61559 11.8191C9.93194 37.3856 12.4985 40.629 15.8498 42.8861c3.3514 2.257 7.3217 3.4159 11.361 3.3162C31.2501 46.1025 35.1584 44.7491 38.3943 42.3294c3.2359-2.4196 5.6393-5.7858 6.8771-9.632C46.5092 28.8511 46.5202 24.7151 45.3029 20.8623s-3.6026-7.2317-6.8256-9.6685c-3.2229-2.43693-7.124-3.81119-11.1627-3.93246z" fill={'currentColor'}></path><path fillRule="evenodd" clipRule="evenodd" fill={'currentColor'} d="M38.8474 21.9189 35.9285 19 24.4761 30.4524l-4.5531-4.553L17 28.8224l7.4833 7.4832 2.923-2.923L27.3949 33.3713 38.8474 21.9189z"></path></svg>
                              </div>
                              <div className={'ml-3'}>
                                  <h3 className={'text-sm font-medium text-slate-50'}>Tento formulář je chráněn Turnstile</h3>
                                  <div class="mt-2 text-sm text-slate-200">
                                      <p>Turnstile je recaptcha od společnosti cloudflare, zaměřující se na soukromí a bezpečnost. <</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <MWTurnStile  />
                  </div>
              </form>
          </div>
            <div className={'px-4 py-3 bg-slate-50 dark:bg-slate-700'}>
                <div className={'flex items-center justify-end gap-2'}>
                    <button className={'block py-2 px-4 text-sm font-medium text-slate-300 border rounded-md shadow-sm transition'}>Přihlásit se</button>
                    <button className={'block py-2 px-4 text-sm font-medium text-white bg-brand rounded-md shadow-sm hover:bg-blue-600 transition focus:outline-none focus:bg-blue-600'}>Vytvořit účet</button>
                </div>
            </div>
        </div>
    </AuthLayout>
}
